<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\MenuItem;

class Menu extends Model
{
    protected $fillable = ['title', 'location'];

    public function items(): HasMany
    {
        return $this->hasMany(MenuItem::class);
    }
}
