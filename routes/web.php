<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BookTourController;
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

Route::get('rates-and-subsidy', function () {
    return view('rates-and-subsidies');
})->name('rates-and-subsidy');

Route::get('careers', function () {
    return view('careers');
})->name('careers');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::post('book-tour-email', [BookTourController::class, 'bookTourEmail'])->name('book_a_tour_email');
Route::post('get-in-touch-email', [BookTourController::class, 'getInTouchEmail'])->name('get_in_touch_email');
Route::post('career-email', [BookTourController::class, 'careerEmail'])->name('career_email');
