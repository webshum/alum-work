<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/categories/{product}', function () {
    return view('page.product');
})->name('categories');

Route::get('/product/{product}', function () {
    return view('page.product');
})->name('product');
