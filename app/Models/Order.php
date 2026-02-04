<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'status',
        'total',
        'commission_rate',
        'commission_earned',
        'notes',
    ];

    protected $casts = [
        'total' => 'decimal:2',
        'commission_rate' => 'decimal:2',
        'commission_earned' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, OrderItem::class, 'order_id', 'id', 'id', 'product_id');
    }

    public function getStatusBadgeClassAttribute()
    {
        return match ($this->status) {
            'pending' => 'bg-warning text-dark',
            'confirmed' => 'bg-info text-white',
            'shipped' => 'bg-primary text-white',
            'completed' => 'bg-success text-white',
            'cancelled' => 'bg-danger text-white',
            default => 'bg-secondary text-white',
        };
    }
}
