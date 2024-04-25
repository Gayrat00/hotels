<?php
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');
//Route::get('/hotels', 'HotelController@index');
//Route::get('/hotels', 'HotelController@index')->name('hotels.index');
//Route::get('/hotels/{hotel}', 'HotelController@show')->name('hotels.show');

Route::resource('hotels', Hotelcontroller::class);
// Маршруты для модели Location
Route::resource('locations', LocationController::class);

// Маршруты для модели Review
Route::resource('reviews', ReviewController::class);

// Маршруты для модели Room
Route::resource('rooms', RoomController::class);

// Маршруты для модели Booking
Route::resource('bookings', BookingController::class);


//Route::controller(HomeController::class)
//    ->middleware('auth')
//    ->group(function () {
//        Route::get('', 'index')->name('home');
//    });
//
//
//Route::controller(Hotelcontroller::class)
//    ->middleware('auth')
//    ->prefix('hotels')
//    ->name('hotels.')
//    ->group(function () {
//        Route::get('', 'index')->name('index');
//        Route::get('/create', 'create')->name('create');
//        Route::post('', 'store')->name('store');
//        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
//        Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
//        Route::put('/{id}', 'update')->name('update')->where('id', '[0-9]+');
//        Route::delete('/{id}', 'destroy')->name('destroy')->where('id', '[0-9]+');
//    });
