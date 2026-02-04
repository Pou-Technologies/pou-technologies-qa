<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InboxMessage;
use App\Models\User; // Assuming User model has API Key field or mechanism
use Illuminate\Support\Facades\Auth;

class ClientInboxController extends Controller
{
    public function index()
    {
        $messages = InboxMessage::where('user_id', Auth::id())
            ->latest()
            ->paginate(15);

        return view('client.inbox.index', compact('messages'));
    }

    public function show(InboxMessage $message)
    {
        if ($message->user_id !== Auth::id()) {
            abort(403);
        }

        if (!$message->is_read) {
            $message->is_read = true;
            $message->save();
        }

        return view('client.inbox.show', compact('message'));
    }

    public function destroy(InboxMessage $message)
    {
        if ($message->user_id !== Auth::id()) {
            abort(403);
        }

        $message->delete();

        return redirect()->route('client.inbox.index')
            ->with('success', 'Message deleted successfully.');
    }

    // API Endpoint for External Sites
    public function apiStore(Request $request)
    {
        // Simple auth for MVP: You might want to use a Token or just User ID validation
        // For this demo, let's assume they pass 'client_id' which matches a User ID
        // In production, use Sanctum or API Keys.

        $request->validate([
            'client_id' => 'required|exists:users,id',
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        InboxMessage::create([
            'user_id' => $request->client_id,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject ?? 'New Inquiry',
            'message' => $request->message,
        ]);

        return response()->json(['success' => true, 'message' => 'Message sent successfully']);
    }
}
