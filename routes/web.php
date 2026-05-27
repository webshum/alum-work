<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/pergolas', function () {
    return view('page.pergolas');
})->name('pergolas');

Route::get('/product', function () {
    return view('page.product');
})->name('product');
