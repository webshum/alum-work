<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['title', 'description', 'is_active'];
    protected $cases = ['is_active' => 'boolean'];

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }
}
