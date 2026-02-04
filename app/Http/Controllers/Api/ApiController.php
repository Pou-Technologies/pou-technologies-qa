<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Subscriber;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    /**
     * Create a new order from external website
     */
    public function createOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'customer_phone' => 'nullable|string',
            'total' => 'required|numeric|min:0',
            'items' => 'required|array|min:1',
            'items.*.name' => 'required|string',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = $request->input('api_user');

        $order = Order::create([
            'user_id' => $user->id,
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'total' => $request->total,
            'status' => 'pending',
        ]);

        foreach ($request->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Order created successfully',
            'data' => [
                'order_id' => $order->id,
                'order_number' => $order->id,
            ],
        ], 201);
    }

    /**
     * Add subscriber to newsletter
     */
    public function addSubscriber(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = $request->input('api_user');

        $subscriber = Subscriber::firstOrCreate(
            [
                'email' => $request->email,
                'user_id' => $user->id,
            ],
            [
                'name' => $request->name,
            ]
        );

        return response()->json([
            'success' => true,
            'message' => $subscriber->wasRecentlyCreated ? 'Subscriber added' : 'Subscriber already exists',
            'data' => [
                'subscriber_id' => $subscriber->id,
            ],
        ], $subscriber->wasRecentlyCreated ? 201 : 200);
    }

    /**
     * Get subscription/hosting status
     */
    public function getSubscriptionStatus(Request $request)
    {
        $user = $request->input('api_user');

        $isActive = $user->hosting_expires_at && $user->hosting_expires_at->isFuture();

        return response()->json([
            'success' => true,
            'data' => [
                'is_active' => $isActive,
                'expires_at' => $user->hosting_expires_at?->format('Y-m-d'),
                'days_remaining' => $isActive ? now()->diffInDays($user->hosting_expires_at) : 0,
            ],
        ]);
    }

    /**
     * Get blog posts
     */
    public function getBlogPosts(Request $request)
    {
        $user = $request->input('api_user');
        
        $limit = $request->input('limit', 10);
        $posts = BlogPost::where('user_id', $user->id)
            ->where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->limit($limit)
            ->get(['id', 'title', 'slug', 'excerpt', 'published_at']);

        return response()->json([
            'success' => true,
            'data' => $posts,
        ]);
    }

    /**
     * Track analytics event
     */
    public function trackAnalytics(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event' => 'required|string',
            'data' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        // For now, just acknowledge the event
        // In production, you'd store this in an analytics table
        
        return response()->json([
            'success' => true,
            'message' => 'Event tracked',
        ]);
    }
}
