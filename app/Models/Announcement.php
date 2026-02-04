<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'type', 'is_published', 'expires_at'];

    protected $casts = [
        'expires_at' => 'datetime',
        'is_published' => 'boolean',
    ];
}
