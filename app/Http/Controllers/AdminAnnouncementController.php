<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAnnouncementController extends Controller
{
    public function index()
    {
        $announcements = \App\Models\Announcement::latest()->paginate(10);
        return view('admin.announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('admin.announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'type' => 'required|in:info,warning,danger,success',
            'expires_at' => 'nullable|date|after:today',
        ]);

        $announcement = \App\Models\Announcement::create([
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,
            'expires_at' => $request->expires_at,
            'is_published' => true,
        ]);

        // Notify all verified users
        $users = \App\Models\User::whereNotNull('email_verified_at')->get();
        \Illuminate\Support\Facades\Notification::send($users, new \App\Notifications\AnnouncementPublished($announcement));

        return redirect()->route('admin.announcements.index')->with('success', 'Announcement published and users notified.');
    }

    public function edit(\App\Models\Announcement $announcement)
    {
        return view('admin.announcements.edit', compact('announcement'));
    }

    public function update(Request $request, \App\Models\Announcement $announcement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'type' => 'required|in:info,warning,danger,success',
            'expires_at' => 'nullable|date|after:today',
        ]);

        $announcement->update([
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,
            'expires_at' => $request->expires_at,
        ]);

        return redirect()->route('admin.announcements.index')->with('success', 'Announcement updated successfully.');
    }

    public function destroy(\App\Models\Announcement $announcement)
    {
        \Illuminate\Support\Facades\Log::info('Attempting to delete announcement: ' . $announcement->id);
        try {
            $announcement->delete();
            return redirect()->route('admin.announcements.index')->with('success', 'Announcement deleted.');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Error deleting announcement: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Could not delete announcement: ' . $e->getMessage());
        }
    }
}
