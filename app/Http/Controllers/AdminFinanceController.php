<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Payment;
use Carbon\Carbon;

class AdminFinanceController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->get('year', now()->year);
        $month = $request->get('month', now()->month);

        // Get transactions for selected period
        $transactions = Transaction::forMonth($year, $month)
            ->orderBy('transaction_date', 'desc')
            ->get();

        // Calculate summaries
        $totalIncome = Transaction::forMonth($year, $month)->income()->sum('amount');
        $totalExpenses = Transaction::forMonth($year, $month)->expense()->sum('amount');
        $netProfit = $totalIncome - $totalExpenses;

        // Year summary for comparison
        $yearIncome = Transaction::forYear($year)->income()->sum('amount');
        $yearExpenses = Transaction::forYear($year)->expense()->sum('amount');
        $yearProfit = $yearIncome - $yearExpenses;

        // Monthly breakdown for chart
        $monthlyData = [];
        for ($m = 1; $m <= 12; $m++) {
            $monthlyData[$m] = [
                'income' => Transaction::forMonth($year, $m)->income()->sum('amount'),
                'expense' => Transaction::forMonth($year, $m)->expense()->sum('amount'),
            ];
        }

        return view('admin.finance.index', compact(
            'transactions',
            'year',
            'month',
            'totalIncome',
            'totalExpenses',
            'netProfit',
            'yearIncome',
            'yearExpenses',
            'yearProfit',
            'monthlyData'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:income,expense',
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'description' => 'required|string|max:500',
            'transaction_date' => 'required|date',
            'reference' => 'nullable|string|max:255',
        ]);

        Transaction::create($request->all());

        return back()->with('success', 'Transaction added successfully.');
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'type' => 'required|in:income,expense',
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'description' => 'required|string|max:500',
            'transaction_date' => 'required|date',
            'reference' => 'nullable|string|max:255',
        ]);

        $transaction->update($request->all());

        return back()->with('success', 'Transaction updated successfully.');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return back()->with('success', 'Transaction deleted.');
    }

    public function importFromPayments(Request $request)
    {
        $year = $request->get('year', now()->year);
        $month = $request->get('month', now()->month);

        // Get payments from selected month that haven't been imported yet
        $payments = Payment::whereYear('payment_date', $year)
            ->whereMonth('payment_date', $month)
            ->whereDoesntHave('transaction')
            ->get();

        $count = 0;
        foreach ($payments as $payment) {
            Transaction::create([
                'type' => 'income',
                'category' => 'Client Payments',
                'amount' => $payment->amount,
                'description' => $payment->description . ' - ' . $payment->user->name,
                'transaction_date' => $payment->payment_date,
                'reference' => 'Payment #' . $payment->id,
                'payment_id' => $payment->id,
            ]);
            $count++;
        }

        if ($count > 0) {
            return back()->with('success', "Imported {$count} payment(s) as income.");
        }

        return back()->with('info', 'No new payments to import for this period.');
    }

    public function export(Request $request)
    {
        $year = $request->get('year', now()->year);
        $month = $request->get('month');
        $format = $request->get('format', 'csv');

        if ($month) {
            $transactions = Transaction::forMonth($year, $month)
                ->orderBy('transaction_date')
                ->get();
            $filename = "transactions_{$year}_{$month}";
        } else {
            $transactions = Transaction::forYear($year)
                ->orderBy('transaction_date')
                ->get();
            $filename = "transactions_{$year}_annual";
        }

        if ($format === 'csv') {
            return $this->exportCsv($transactions, $filename);
        }

        // For PDF, we'll return a view that can be printed
        return view('admin.finance.export', compact('transactions', 'year', 'month'));
    }

    private function exportCsv($transactions, $filename)
    {
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename={$filename}.csv",
        ];

        $callback = function () use ($transactions) {
            $file = fopen('php://output', 'w');

            // Header row
            fputcsv($file, ['Date', 'Type', 'Category', 'Description', 'Reference', 'Amount']);

            foreach ($transactions as $t) {
                fputcsv($file, [
                    $t->transaction_date->format('Y-m-d'),
                    ucfirst($t->type),
                    $t->category,
                    $t->description,
                    $t->reference ?? '',
                    ($t->type === 'expense' ? '-' : '') . number_format($t->amount, 2),
                ]);
            }

            // Summary row
            $income = $transactions->where('type', 'income')->sum('amount');
            $expenses = $transactions->where('type', 'expense')->sum('amount');
            fputcsv($file, []);
            fputcsv($file, ['', '', '', 'Total Income', '', number_format($income, 2)]);
            fputcsv($file, ['', '', '', 'Total Expenses', '', '-' . number_format($expenses, 2)]);
            fputcsv($file, ['', '', '', 'Net Profit', '', number_format($income - $expenses, 2)]);

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
