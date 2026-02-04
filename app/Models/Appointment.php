<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'start',
        'end',
        'status',
        'notes',
        'customer_email',
        'customer_phone',
    ];

    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];
}
