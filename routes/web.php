<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);

// Сторінка для верстки
Route::get('/reference', function () {
    return view('page.reference');
})->name('reference');

Route::controller(CategoryController::class)
    ->prefix('categories')
    ->name('categories.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{category:slug}', 'show')->name('show');
    });

Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{product:slug}', 'show')->name('show');
    });

// Цей роут має бути останнім, бо він ловить все підряд
Route::get('/{page:slug}', [PageController::class, 'index'])->name('page');