<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\StockMovement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::where('user_id', Auth::id())->latest();

        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }

        $products = $query->paginate(15);

        $categories = Category::where('user_id', Auth::id())->get();

        $lowStockCount = Product::where('user_id', Auth::id())
            ->whereColumn('quantity', '<=', 'min_stock')
            ->count();

        $totalItems = Product::where('user_id', Auth::id())->sum('quantity');

        return view('client.inventory.index', compact('products', 'categories', 'lowStockCount', 'totalItems'));
    }

    public function create()
    {
        $categories = Category::where('user_id', Auth::id())->get();
        return view('client.inventory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'min_stock' => 'required|integer|min:1',
            'price' => 'nullable|numeric|min:0',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $product = Product::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'sku' => $request->sku,
            'quantity' => $request->quantity,
            'min_stock' => $request->min_stock,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        // Record initial stock
        if ($request->quantity > 0) {
            StockMovement::create([
                'product_id' => $product->id,
                'type' => 'in',
                'quantity' => $request->quantity,
                'notes' => 'Initial Stock',
            ]);
        }

        return redirect()->route('client.inventory.index')->with('success', 'Product added successfully.');
    }

    public function edit(Product $product)
    {
        // Permission check disabled temporarily
        // if ((int) $product->user_id !== (int) Auth::id()) {
        //     abort(403);
        // }
        $categories = Category::where('user_id', Auth::id())->get();
        return view('client.inventory.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        // Permission check disabled temporarily
        // if ($product->user_id != Auth::id()) {
        //     abort(403);
        // }

        $request->validate([
            'name' => 'required|string|max:255',
            'min_stock' => 'required|integer|min:1',
            'price' => 'nullable|numeric|min:0',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $product->update($request->only(['name', 'sku', 'min_stock', 'price', 'description', 'category_id']));

        return redirect()->route('client.inventory.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Permission check disabled temporarily
        // if ($product->user_id != Auth::id()) {
        //     abort(403);
        // }
        $product->delete();
        return back()->with('success', 'Product deleted.');
    }

    public function adjust(Request $request, Product $product)
    {
        // Permission check disabled temporarily
        // if ($product->user_id != Auth::id()) {
        //     abort(403);
        // }

        $request->validate([
            'quantity' => 'required|integer|min:1',
            'type' => 'required|in:in,out',
            'notes' => 'nullable|string',
        ]);

        $qty = $request->quantity;

        if ($request->type === 'out') {
            if ($product->quantity < $qty) {
                return back()->with('error', 'Not enough stock!');
            }
            $product->decrement('quantity', $qty);
        } else {
            $product->increment('quantity', $qty);
        }

        StockMovement::create([
            'product_id' => $product->id,
            'type' => $request->type,
            'quantity' => $qty,
            'notes' => $request->notes ?? ($request->type === 'in' ? 'Restock' : 'Sale/Usage'),
        ]);

        return back()->with('success', 'Stock updated.');
    }

    public function history(Product $product)
    {
        // Permission check disabled temporarily
        // if ($product->user_id != Auth::id()) {
        //     abort(403);
        // }

        $movements = $product->movements()->latest()->paginate(20);

        return view('client.inventory.history', compact('product', 'movements'));
    }

    // API to store category via AJAX
    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
        ]);

        return response()->json($category);
    }
}
