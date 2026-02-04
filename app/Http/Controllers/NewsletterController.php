<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterMail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/', // Prevent script injection in name
            'email' => 'required|email:filter|max:150|unique:subscribers,email',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! please try again later or contact site admin.',
            'name.regex' => 'Please provide a valid name.',
        ]);

        Subscriber::create([
            'name' => strip_tags($request->name), // Extra sanitization
            'email' => $request->email
        ]);

        return back()->with('success', 'Welcome to the inner circle! You successfully subscribed.');
    }

    public function adminIndex()
    {
        $subscribers = Subscriber::latest()->get();
        return view('admin.subscriptions.index', compact('subscribers'));
    }

    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return back()->with('success', 'Subscriber removed successfully.');
    }

    public function sendNewsletter(Request $request, Subscriber $subscriber)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to($subscriber->email)->send(new NewsletterMail($subscriber, $request->subject, $request->message));

        return back()->with('success', 'Newsletter sent successfully to ' . $subscriber->name);
    }
}
