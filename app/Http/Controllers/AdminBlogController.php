<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog', 'public');
        }

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . Str::random(5),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
            'image' => $imagePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $post->image = $request->file('image')->store('blog', 'public');
        }

        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . Str::random(5), // Refresh slug too
            'content' => $request->input('content'),
            'category' => $request->input('category'),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Post deleted successfully.');
    }
}
