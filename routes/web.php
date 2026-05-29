<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);

Route::controller(CategoryController::class)
    ->prefix('categories')
    ->name('categories.')
    ->group(function () {
        Route::get('/{category:slug}', 'show')->name('show');
    });

Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function () {
       Route::get('/{product:slug}', 'show')->name('show');
    });
