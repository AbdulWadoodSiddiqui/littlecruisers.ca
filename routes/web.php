<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('programs', function () {
    return view('programs');
})->name('programs');

Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('parents-guide', function () {
    return view('parents-guide');
})->name('parents-guide');

Route::get('rates-and-subsidies', function () {
    return view('rates-and-subsidies');
})->name('rates-and-subsidies');

Route::get('careers', function () {
    return view('careers');
})->name('careers');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');