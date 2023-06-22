<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\BlogPostController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ContactUsController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/filtered-services-menu', [BookingController::class, 'filteredServicesMenu'])->name('booking.filtered-services-menu');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/service/detail', [ServicesController::class, 'detail'])->name('service.detail');

Route::get('/blog-post', [BlogPostController::class, 'index'])->name('blog-post');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');