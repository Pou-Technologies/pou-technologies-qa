<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;
use Illuminate\Support\Str;

class AdminTutorialController extends Controller
{
    public function index()
    {
        $tutorials = Tutorial::latest()->paginate(10);
        return view('admin.tutorials.index', compact('tutorials'));
    }

    public function create()
    {
        return view('admin.tutorials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string',
        ]);

        Tutorial::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
            'excerpt' => $request->excerpt,
            'category' => $request->category,
            'video_url' => $request->video_url,
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()->route('admin.tutorials.index')->with('success', 'Tutorial created successfully.');
    }

    public function edit(Tutorial $tutorial)
    {
        return view('admin.tutorials.edit', compact('tutorial'));
    }

    public function update(Request $request, Tutorial $tutorial)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string',
        ]);

        $tutorial->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
            'excerpt' => $request->excerpt,
            'category' => $request->category,
            'video_url' => $request->video_url,
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()->route('admin.tutorials.index')->with('success', 'Tutorial updated successfully.');
    }

    public function destroy(Tutorial $tutorial)
    {
        $tutorial->delete();
        return redirect()->route('admin.tutorials.index')->with('success', 'Tutorial deleted successfully.');
    }
}
