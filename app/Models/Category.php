<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'parent_id',
        'slug',
        'thumbnails',
        'meta_title',
        'meta_description',
        'is_active'
    ];

    protected $cases = ['is_active' => 'boolean'];
}
