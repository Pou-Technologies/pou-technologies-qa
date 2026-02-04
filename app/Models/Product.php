<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'sku',
        'quantity',
        'min_stock',
        'price',
        'description',
        'category_id',
        'image',
        'is_published',
        'is_digital',
        'vimeo_url',
        'digital_file',
        'digital_file_name',
        'slug',
    ];

    protected $casts = [
        'is_read' => 'boolean', // from InboxMessage copy-paste remnant? No, this is Product. Product doesn't have is_read.
        // removing user_id cast
        'quantity' => 'integer',
        'min_stock' => 'integer',
        'price' => 'decimal:2',
        'is_published' => 'boolean',
        'is_digital' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function movements()
    {
        return $this->hasMany(StockMovement::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
