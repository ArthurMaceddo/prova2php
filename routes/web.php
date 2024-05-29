<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layouts.app');
})-> name('home');

Route::resource('products', ProductController::class);

Route::post('/contact',[App\http\Controllers\ContactformController::class, 'submitForm'])->name('site.contact');
Route::get('/contact', [App\http\Controllers\ContactformController::class, 'show'])->name('components.contactform');

Route::fallback(function () {
    return view('404');
});
