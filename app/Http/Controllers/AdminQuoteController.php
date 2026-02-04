<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\QuoteItem;
use App\Models\Prospect;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminQuoteController extends Controller
{
    public function index(Request $request)
    {
        $query = Quote::with('prospect');

        if ($request->status) {
            $query->where('status', $request->status);
        }

        $quotes = $query->orderBy('created_at', 'desc')->paginate(20);

        $stats = [
            'draft' => Quote::draft()->count(),
            'sent' => Quote::sent()->count(),
            'accepted' => Quote::accepted()->count(),
            'total_value' => Quote::accepted()->sum('total'),
        ];

        return view('admin.quotes.index', compact('quotes', 'stats'));
    }

    public function create(Request $request)
    {
        $prospects = Prospect::orderBy('name')->get();
        $services = Service::active()->orderBy('category')->orderBy('name')->get()->groupBy('category');
        $selectedProspect = $request->prospect_id ? Prospect::find($request->prospect_id) : null;

        return view('admin.quotes.create', compact('prospects', 'services', 'selectedProspect'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'prospect_id' => 'required|exists:prospects,id',
            'valid_until' => 'nullable|date|after:today',
            'notes' => 'nullable|string|max:2000',
            'discount' => 'nullable|numeric|min:0',
            'items' => 'required|array|min:1',
            'items.*.description' => 'required|string|max:500',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.unit_price' => 'required|numeric|min:0',
        ]);

        $quote = Quote::create([
            'quote_number' => Quote::generateQuoteNumber(),
            'prospect_id' => $request->prospect_id,
            'valid_until' => $request->valid_until,
            'notes' => $request->notes,
            'discount' => $request->discount ?? 0,
            'status' => 'draft',
        ]);

        foreach ($request->items as $item) {
            QuoteItem::create([
                'quote_id' => $quote->id,
                'service_id' => $item['service_id'] ?? null,
                'description' => $item['description'],
                'quantity' => $item['quantity'],
                'unit_price' => $item['unit_price'],
                'total' => $item['quantity'] * $item['unit_price'],
            ]);
        }

        $quote->calculateTotals();

        return redirect()->route('admin.quotes.show', $quote)->with('success', 'Quote created successfully.');
    }

    public function show(Quote $quote)
    {
        $quote->load(['prospect', 'items.service']);
        return view('admin.quotes.show', compact('quote'));
    }

    public function send(Quote $quote)
    {
        $quote->load(['prospect', 'items']);

        // Send email with quote
        Mail::send('emails.quote', ['quote' => $quote], function ($mail) use ($quote) {
            $mail->to($quote->prospect->email, $quote->prospect->name)
                ->subject('Quote #' . $quote->quote_number . ' from Pou Technologies')
                ->from(config('mail.from.address'), config('mail.from.name'));
        });

        $quote->update([
            'status' => 'sent',
            'sent_at' => now(),
        ]);

        return back()->with('success', 'Quote sent to ' . $quote->prospect->email . '.');
    }

    public function updateStatus(Request $request, Quote $quote)
    {
        $request->validate([
            'status' => 'required|in:draft,sent,viewed,accepted,rejected,expired',
        ]);

        $quote->update(['status' => $request->status]);

        return back()->with('success', 'Quote status updated to ' . ucfirst($request->status) . '.');
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect()->route('admin.quotes.index')->with('success', 'Quote deleted.');
    }

    public function preview(Quote $quote)
    {
        $quote->load(['prospect', 'items']);
        return view('admin.quotes.preview', compact('quote'));
    }
}
