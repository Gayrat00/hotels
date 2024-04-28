<?php
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->name('home');

Route::resource('/hotels', Hotelcontroller::class);
Route::resource('/reviews', ReviewController::class);
Route::resource('/bookings', BookingController::class);
Route::resource('/contacts', ContactController::class);


