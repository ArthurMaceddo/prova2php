<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layouts.app');
})-> name('home');

Route::resource('products', ProductController::class);

Route::fallback(function () {
    return view('404');
});
