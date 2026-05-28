<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnails',
        'price',
        'old_price',
        'discount',
        'is_active',
        'recommended',
        'meta_title',
        'meta_description'
    ];

    protected $cases = [
        'is_active' => 'boolean',
        'recommended' => 'boolean',
    ];
}
