<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_number',
        'prospect_id',
        'status',
        'valid_until',
        'notes',
        'subtotal',
        'discount',
        'total',
        'sent_at',
        'viewed_at',
    ];

    protected $casts = [
        'valid_until' => 'date',
        'sent_at' => 'datetime',
        'viewed_at' => 'datetime',
        'subtotal' => 'decimal:2',
        'discount' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function prospect()
    {
        return $this->belongsTo(Prospect::class);
    }

    public function items()
    {
        return $this->hasMany(QuoteItem::class);
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopeSent($query)
    {
        return $query->where('status', 'sent');
    }

    public function scopeAccepted($query)
    {
        return $query->where('status', 'accepted');
    }

    public function isExpired(): bool
    {
        return $this->valid_until && $this->valid_until->isPast();
    }

    public static function generateQuoteNumber(): string
    {
        $year = now()->year;
        $lastQuote = self::whereYear('created_at', $year)->orderBy('id', 'desc')->first();
        $number = $lastQuote ? intval(substr($lastQuote->quote_number, -3)) + 1 : 1;
        return 'QT-' . $year . '-' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    public function calculateTotals(): void
    {
        $this->subtotal = $this->items->sum('total');
        $this->total = $this->subtotal - $this->discount;
        $this->save();
    }

    public function getStatusBadgeAttribute(): string
    {
        return match ($this->status) {
            'draft' => 'bg-secondary',
            'sent' => 'bg-info',
            'viewed' => 'bg-warning',
            'accepted' => 'bg-success',
            'rejected' => 'bg-danger',
            'expired' => 'bg-dark',
            default => 'bg-secondary',
        };
    }
}
