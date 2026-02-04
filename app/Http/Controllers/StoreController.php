<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    /**
     * Display the store management page with all products.
     */
    public function index()
    {
        $products = Product::where('user_id', Auth::id())->latest()->paginate(12);
        $publishedCount = Product::where('user_id', Auth::id())->where('is_published', true)->count();
        $pendingOrders = Order::where('user_id', Auth::id())->where('status', 'pending')->count();

        return view('client.store.index', compact('products', 'publishedCount', 'pendingOrders'));
    }

    /**
     * Toggle the publish status of a product.
     */
    public function publish(Product $product)
    {
        // Ensure the product belongs to the authenticated user
        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        $product->is_published = !$product->is_published;

        // Generate slug if publishing and no slug exists
        if ($product->is_published && empty($product->slug)) {
            $product->slug = Str::slug($product->name) . '-' . Str::random(5);
        }

        $product->save();

        $status = $product->is_published ? 'published' : 'unpublished';
        return back()->with('success', "Product {$status} successfully.");
    }

    /**
     * Toggle the digital status of a product.
     */
    public function toggleDigital(Product $product)
    {
        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        $product->is_digital = !$product->is_digital;
        $product->save();

        $status = $product->is_digital ? 'marked as digital' : 'marked as physical';
        return back()->with('success', "Product {$status}. Digital products have unlimited stock.");
    }

    /**
     * Upload an image for a product.
     */
    public function uploadImage(Request $request, Product $product)
    {
        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Delete old image if exists
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $path = $request->file('image')->store('store', 'public');
        $product->update(['image' => $path]);

        return back()->with('success', 'Product image updated successfully.');
    }

    /**
     * Display all orders for the authenticated user.
     */
    public function orders(Request $request)
    {
        $query = Order::where('user_id', Auth::id())->with('items.product')->latest();

        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        $orders = $query->paginate(15);

        return view('client.orders.index', compact('orders'));
    }

    /**
     * Display a single order with its items.
     */
    public function showOrder(Order $order)
    {
        if ($order->user_id != Auth::id()) {
            abort(403);
        }

        $order->load('items.product');

        return view('client.orders.show', compact('order'));
    }

    /**
     * Update the status of an order.
     */
    public function updateOrderStatus(Request $request, Order $order)
    {
        if ($order->user_id != Auth::id()) {
            abort(403);
        }

        $request->validate([
            'status' => 'required|in:pending,confirmed,shipped,completed,cancelled',
        ]);

        $oldStatus = $order->status;
        $order->status = $request->status;

        // If order is completed for the first time, process stock and commission
        if ($request->status === 'completed' && $oldStatus !== 'completed') {
            // Decrement stock for non-digital products
            foreach ($order->items as $item) {
                if (!$item->product->is_digital) {
                    $item->product->decrement('quantity', $item->quantity);
                }
            }

            // Calculate and record commission
            $user = Auth::user();
            $commissionRate = $user->stripe_commission_rate ?? 2.00;
            $commissionEarned = ($order->total * $commissionRate) / 100;

            $order->commission_rate = $commissionRate;
            $order->commission_earned = $commissionEarned;
        }

        $order->save();

        return back()->with('success', 'Order status updated to ' . ucfirst($request->status) . '.');
    }
}
