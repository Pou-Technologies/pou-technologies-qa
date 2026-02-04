<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function index()
    {
        return view('client.calendar.index');
    }

    public function events()
    {
        $appointments = Appointment::where('user_id', Auth::id())
            ->where('status', '!=', 'cancelled')
            ->get()
            ->map(function ($appointment) {
                return [
                    'id' => $appointment->id,
                    'title' => $appointment->title,
                    'start' => $appointment->start->toIso8601String(),
                    'end' => $appointment->end ? $appointment->end->toIso8601String() : null,
                    'extendedProps' => [
                        'notes' => $appointment->notes,
                        'email' => $appointment->customer_email,
                        'phone' => $appointment->customer_phone,
                    ]
                ];
            });

        return response()->json($appointments);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'start' => 'required|date',
            'end' => 'nullable|date|after:start',
            'email' => 'nullable|email',
        ]);

        $appointment = Appointment::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'customer_email' => $request->email,
            'customer_phone' => $request->phone,
            'notes' => $request->notes,
        ]);

        return response()->json($appointment);
    }

    public function update(Request $request, Appointment $appointment)
    {
        if ($appointment->user_id !== Auth::id()) {
            abort(403);
        }

        $appointment->update($request->only(['start', 'end', 'title', 'notes'])); // Simplify for drag-drop

        return response()->json($appointment);
    }

    public function destroy(Appointment $appointment)
    {
        if ($appointment->user_id !== Auth::id()) {
            abort(403);
        }

        $appointment->status = 'cancelled';
        $appointment->save();
        // Or $appointment->delete(); based on requirement

        return response()->json(['success' => true]);
    }
}
