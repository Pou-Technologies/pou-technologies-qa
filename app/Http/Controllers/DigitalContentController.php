<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DigitalContentController extends Controller
{
    /**
     * Display all digital products for the authenticated user.
     */
    public function index()
    {
        // Ensure user has the streaming_service feature
        if (!Auth::user()->hasFeature('streaming_service')) {
            abort(403, 'This feature is not enabled for your account.');
        }

        $products = Product::where('user_id', Auth::id())
            ->where('is_digital', true)
            ->latest()
            ->paginate(12);

        return view('client.digital-content.index', compact('products'));
    }

    /**
     * Show form to add digital content to a product.
     */
    public function edit(Product $product)
    {
        if (!Auth::user()->hasFeature('streaming_service')) {
            abort(403, 'This feature is not enabled for your account.');
        }

        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        return view('client.digital-content.edit', compact('product'));
    }

    /**
     * Update digital content for a product.
     */
    public function update(Request $request, Product $product)
    {
        if (!Auth::user()->hasFeature('streaming_service')) {
            abort(403, 'This feature is not enabled for your account.');
        }

        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        $request->validate([
            'vimeo_url' => 'nullable|url',
            'digital_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png,gif,webp|max:10240', // 10MB max
        ]);

        // Update Vimeo URL
        if ($request->has('vimeo_url')) {
            $product->vimeo_url = $request->vimeo_url;
        }

        // Handle file upload
        if ($request->hasFile('digital_file')) {
            // Delete old file if exists
            if ($product->digital_file) {
                Storage::disk('private')->delete($product->digital_file);
            }

            $path = $request->file('digital_file')->store('digital-content/' . Auth::id(), 'private');
            $product->digital_file = $path;
            $product->digital_file_name = $request->file('digital_file')->getClientOriginalName();
        }

        $product->save();

        return redirect()->route('client.digital-content.index')
            ->with('success', 'Digital content updated successfully.');
    }

    /**
     * Remove digital content from a product.
     */
    public function destroy(Product $product)
    {
        if (!Auth::user()->hasFeature('streaming_service')) {
            abort(403, 'This feature is not enabled for your account.');
        }

        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        // Delete file if exists
        if ($product->digital_file) {
            Storage::disk('private')->delete($product->digital_file);
        }

        $product->vimeo_url = null;
        $product->digital_file = null;
        $product->digital_file_name = null;
        $product->save();

        return back()->with('success', 'Digital content removed.');
    }

    /**
     * Download digital file (for authorized customers only).
     * This will be called from the public storefront after payment verification.
     */
    public function download(Product $product, $orderToken)
    {
        // Verify the order token and ensure the customer has paid
        // This is a placeholder - actual implementation would verify against orders table

        if (!$product->digital_file) {
            abort(404, 'No file available for download.');
        }

        if (!Storage::disk('private')->exists($product->digital_file)) {
            abort(404, 'File not found.');
        }

        return response()->download(
            Storage::disk('private')->path($product->digital_file),
            $product->digital_file_name ?? 'download'
        );
    }
}
