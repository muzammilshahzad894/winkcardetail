<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BookingController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/filtered-services-menu', [BookingController::class, 'filteredServicesMenu'])->name('booking.filtered-services-menu');
