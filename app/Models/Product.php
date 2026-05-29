<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'content',
        'additional_information',
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

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }

    public function scopeRecommended($query) {
        return $query->where('recommended', 1);
    }
}
