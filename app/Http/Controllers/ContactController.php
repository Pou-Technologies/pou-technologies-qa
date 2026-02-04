<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|array',
            'other_subject' => 'nullable|string|max:255',
            'subject_text' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! please try again later or contact site admin.',
        ]);

        // Here you would typically send an email. 
        // For now, we'll just log it or assume it sends to the admin.
        // Mail::to('contact@poutechnologies.com')->send(new ContactFormMail($request->all()));

        return redirect()->route('contact')->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
