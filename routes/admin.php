<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\VehicleTypeController;
use App\Http\Controllers\Admin\WashPackageController;
use App\Http\Controllers\Admin\ServicesMenuController;
use App\Http\Controllers\Admin\BookingController;

Route::match(['get', 'post'], '/admin/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('admin.index');
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

    // vehicle type routes
    Route::get('/admin/vehicle-types', [VehicleTypeController::class, 'index'])->name('admin.vehicle-types.index');
    Route::get('/admin/vehicle-types/create', [VehicleTypeController::class, 'create'])->name('admin.vehicle-types.create');
    Route::post('/admin/vehicle-types/store', [VehicleTypeController::class, 'store'])->name('admin.vehicle-types.store');
    Route::get('/admin/vehicle-types/{id}/edit', [VehicleTypeController::class, 'edit'])->name('admin.vehicle-types.edit');
    Route::post('/admin/vehicle-types/{id}/update', [VehicleTypeController::class, 'update'])->name('admin.vehicle-types.update');
    Route::delete('/admin/vehicle-types/{id}/destroy', [VehicleTypeController::class, 'destroy'])->name('admin.vehicle-types.destroy');

    // wash package routes
    Route::get('/admin/wash-packages', [WashPackageController::class, 'index'])->name('admin.wash-packages.index');
    Route::get('/admin/wash-packages/create', [WashPackageController::class, 'create'])->name('admin.wash-packages.create');
    Route::post('/admin/wash-packages/store', [WashPackageController::class, 'store'])->name('admin.wash-packages.store');
    Route::get('/admin/wash-packages/{id}/edit', [WashPackageController::class, 'edit'])->name('admin.wash-packages.edit');
    Route::post('/admin/wash-packages/{id}/update', [WashPackageController::class, 'update'])->name('admin.wash-packages.update');
    Route::delete('/admin/wash-packages/{id}/destroy', [WashPackageController::class, 'destroy'])->name('admin.wash-packages.destroy');

    // services menu routes
    Route::get('/admin/services-menu', [ServicesMenuController::class, 'index'])->name('admin.services-menu.index');
    Route::get('/admin/services-menu/create', [ServicesMenuController::class, 'create'])->name('admin.services-menu.create');
    Route::post('/admin/services-menu/store', [ServicesMenuController::class, 'store'])->name('admin.services-menu.store');
    Route::get('/admin/services-menu/{id}/edit', [ServicesMenuController::class, 'edit'])->name('admin.services-menu.edit');
    Route::post('/admin/services-menu/{id}/update', [ServicesMenuController::class, 'update'])->name('admin.services-menu.update');
    Route::delete('/admin/services-menu/{id}/destroy', [ServicesMenuController::class, 'destroy'])->name('admin.services-menu.destroy');

    // bookings
    Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
    Route::get('/admin/bookings/{id}/edit', [BookingController::class, 'editBooking'])->name('admin.bookings.edit');
    Route::post('/admin/bookings/{id}/update', [BookingController::class, 'updateBooking'])->name('admin.bookings.update');
    Route::delete('/admin/bookings/{id}/destroy', [BookingController::class, 'destroyBooking'])->name('admin.bookings.destroy');
});
