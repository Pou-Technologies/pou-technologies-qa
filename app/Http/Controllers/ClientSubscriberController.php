<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClientNewsletter;

class ClientSubscriberController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $subscribers = Subscriber::where('user_id', $user->id)->latest()->paginate(10);
        return view('client.subscribers.index', compact('user', 'subscribers'));
    }

    public function destroy(Subscriber $subscriber)
    {
        // Ensure the subscriber belongs to the authenticated user
        if ($subscriber->user_id !== Auth::id()) {
            abort(403);
        }

        $subscriber->delete();
        return back()->with('success', 'Subscriber removed successfully.');
    }

    public function compose()
    {
        $user = Auth::user();
        $subscriberCount = Subscriber::where('user_id', $user->id)->count();
        return view('client.subscribers.compose', compact('user', 'subscriberCount'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $user = Auth::user();
        $subscribers = Subscriber::where('user_id', $user->id)->get();

        if ($subscribers->isEmpty()) {
            return back()->with('error', 'You have no subscribers to send this newsletter to.');
        }

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->queue(new ClientNewsletter($request->subject, $request->message, $user));
        }

        return redirect()->route('client.subscribers.index')->with('success', 'Newsletter queued for sending to ' . $subscribers->count() . ' subscribers.');
    }
}
