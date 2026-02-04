<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subscriber;
use App\Mail\ClientBlogPostEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ClientBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->latest()->paginate(10);
        return view('client.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $slug = Str::slug($request->title);
        // Ensure slug uniqueness for this user or globally if desired.
        // For simplicity, appending random string if exists might be safer or check existence.
        // Assuming global uniqueness for slug as per migration.
        if (Post::where('slug', $slug)->exists()) {
            $slug .= '-' . Str::random(5);
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog-images', 'public');
        }

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('client.blog.index')->with('success', 'Blog post created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403);
        }
        return view('client.blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;

        // Optionally update slug if title changes, but often better to keep slug stable for SEO.
        // We will keep slug stable here unless explicitly requested otherwise.

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('blog-images', 'public');
        }

        $post->save();

        return redirect()->route('client.blog.index')->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403);
        }

        $post->delete();

        return back()->with('success', 'Blog post deleted successfully.');
    }

    public function composeEmail(Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403);
        }

        $subscriberCount = Subscriber::where('user_id', Auth::id())->count();
        return view('client.blog.email', compact('post', 'subscriberCount'));
    }

    public function sendEmail(Request $request, Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'subject' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $subscribers = Subscriber::where('user_id', $user->id)->get();

        if ($subscribers->isEmpty()) {
            return back()->with('error', 'You have no subscribers to send this to.');
        }

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->queue(new ClientBlogPostEmail($post, $user, $request->subject));
        }

        return redirect()->route('client.blog.index')->with('success', 'Blog post queued for sending to ' . $subscribers->count() . ' subscribers.');
    }
}
