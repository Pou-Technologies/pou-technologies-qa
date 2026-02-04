<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'category',
        'amount',
        'description',
        'transaction_date',
        'reference',
        'payment_id',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'transaction_date' => 'date',
    ];

    // Scopes
    public function scopeIncome($query)
    {
        return $query->where('type', 'income');
    }

    public function scopeExpense($query)
    {
        return $query->where('type', 'expense');
    }

    public function scopeForMonth($query, $year, $month)
    {
        return $query->whereYear('transaction_date', $year)
            ->whereMonth('transaction_date', $month);
    }

    public function scopeForYear($query, $year)
    {
        return $query->whereYear('transaction_date', $year);
    }

    // Relationships
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    // Helpers
    public function isIncome(): bool
    {
        return $this->type === 'income';
    }

    public function isExpense(): bool
    {
        return $this->type === 'expense';
    }

    // Default categories
    public static function incomeCategories(): array
    {
        return [
            'Client Payments',
            'Hosting Revenue',
            'Web Design Projects',
            'Consulting',
            'Commissions',
            'Other Income',
        ];
    }

    public static function expenseCategories(): array
    {
        return [
            'Software & Tools',
            'Hosting Costs',
            'Marketing',
            'Office Supplies',
            'Professional Services',
            'Salaries',
            'Other Expenses',
        ];
    }
}
