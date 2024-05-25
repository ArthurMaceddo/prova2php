<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layouts.app');
})-> name('home');

Route::resource('products', ProductController::class);

Route::get('/contact', [ContactFormController::class, 'show'])->name('components.contactform');
Route::post('/contact',[\App\http\Controllers\ContactController::class, 'contact'])->name('site.contact');

Route::fallback(function () {
    return view('404');
});
