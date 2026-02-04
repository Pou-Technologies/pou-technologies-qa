<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_id',
        'service_id',
        'description',
        'quantity',
        'unit_price',
        'total',
    ];

    protected $casts = [
        'unit_price' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    protected static function booted()
    {
        static::saving(function ($item) {
            $item->total = $item->quantity * $item->unit_price;
        });

        static::saved(function ($item) {
            $item->quote->calculateTotals();
        });

        static::deleted(function ($item) {
            $item->quote->calculateTotals();
        });
    }
}
