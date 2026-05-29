<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'title',
        'parent_id',
        'slug',
        'thumbnails',
        'content',
        'meta_title',
        'meta_description',
        'is_active'
    ];

    protected $cases = ['is_active' => 'boolean'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }
}
