<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use Illuminate\Http\Request;

class AdminProspectController extends Controller
{
    public function index(Request $request)
    {
        $query = Prospect::query()->withCount('quotes');

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', "%{$request->search}%")
                    ->orWhere('email', 'like', "%{$request->search}%")
                    ->orWhere('company', 'like', "%{$request->search}%");
            });
        }

        $prospects = $query->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.prospects.index', compact('prospects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:100',
            'notes' => 'nullable|string|max:1000',
        ]);

        $prospect = Prospect::create($request->all());

        if ($request->ajax()) {
            return response()->json(['success' => true, 'prospect' => $prospect]);
        }

        return back()->with('success', 'Prospect added successfully.');
    }

    public function show(Prospect $prospect)
    {
        $prospect->load([
            'quotes' => function ($q) {
                $q->orderBy('created_at', 'desc');
            }
        ]);

        return view('admin.prospects.show', compact('prospect'));
    }

    public function update(Request $request, Prospect $prospect)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:100',
            'notes' => 'nullable|string|max:1000',
        ]);

        $prospect->update($request->all());

        return back()->with('success', 'Prospect updated.');
    }

    public function destroy(Prospect $prospect)
    {
        $prospect->delete();
        return redirect()->route('admin.prospects.index')->with('success', 'Prospect deleted.');
    }

    public function sendPromotion(Request $request, Prospect $prospect)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        \Mail::raw($request->message, function ($mail) use ($prospect, $request) {
            $mail->to($prospect->email, $prospect->name)
                ->subject($request->subject)
                ->from(config('mail.from.address'), config('mail.from.name'));
        });

        return back()->with('success', 'Promotion email sent to ' . $prospect->name . '.');
    }
}
