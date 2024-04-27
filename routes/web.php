<?php
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index']);

Route::resource('hotels', Hotelcontroller::class);
Route::resource('locations', LocationController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('rooms', RoomController::class);
Route::resource('bookings', BookingController::class);
