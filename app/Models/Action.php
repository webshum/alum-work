<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = ['title', 'image', 'description', 'is_active', 'sort', 'url'];
    protected $cases = ['is_active' => 'boolean'];

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }
}
