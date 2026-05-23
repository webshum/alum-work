<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
});

Route::get('/pergolas', function () {
    return view('public.pergolas');
})->name('pergolas');

Route::get('/product', function () {
    return view('public.product');
})->name('product');