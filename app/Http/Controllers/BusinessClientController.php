<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessClient;
use Illuminate\Support\Facades\Auth;

class BusinessClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = BusinessClient::where('user_id', Auth::id())->latest()->paginate(10);
        return view('client.business_clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.business_clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        BusinessClient::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'notes' => $request->notes,
        ]);

        return redirect()->route('client.business-clients.index')->with('success', 'Client added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessClient $businessClient)
    {
        if ($businessClient->user_id !== Auth::id()) {
            abort(403);
        }
        return view('client.business_clients.edit', compact('businessClient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessClient $businessClient)
    {
        if ($businessClient->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $businessClient->update($request->all());

        return redirect()->route('client.business-clients.index')->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessClient $businessClient)
    {
        if ($businessClient->user_id !== Auth::id()) {
            abort(403);
        }
        $businessClient->delete();
        return back()->with('success', 'Client deleted successfully.');
    }

    public function charge(BusinessClient $businessClient)
    {
        if ($businessClient->user_id !== Auth::id()) {
            abort(403);
        }

        // Check if user has connected stripe account
        if (!Auth::user()->stripe_onboarding_completed) {
            return redirect()->route('client.business-clients.index')
                ->with('error', 'You must connect your Stripe account before charging clients.');
        }

        return view('client.business_clients.charge', compact('businessClient'));
    }

    public function email(BusinessClient $businessClient)
    {
        if ($businessClient->user_id !== Auth::id()) {
            abort(403);
        }
        return view('client.business_clients.email', compact('businessClient'));
    }

    public function sendEmail(Request $request, BusinessClient $businessClient)
    {
        if ($businessClient->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if (empty($businessClient->email)) {
            return back()->with('error', 'This client does not have an email address.');
        }

        try {
            \Illuminate\Support\Facades\Mail::to($businessClient->email)
                ->send(new \App\Mail\BusinessClientMail(
                    Auth::user()->name,
                    $businessClient->name,
                    $request->subject,
                    $request->message
                ));

            return redirect()->route('client.business-clients.index')
                ->with('success', 'Email sent successfully to ' . $businessClient->name);
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}
