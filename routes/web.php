<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardingHouseController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/product-details', function () {
    return view('product_details.index');
})->middleware(['auth'])->name('product.details');

Route::get('/browse-boarding-house', function () {
        return view('browse_boarding_house.index');
    })->name('browse_boarding_house.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('users', \App\Http\Controllers\UserController::class);

    // chat route
    Route::view('/chat', 'chat.index')->name('chat.index');
    Route::view('/landlord_dashboard', 'landlord_dashboard.index')->name('landlord_dashboard.index');
    Route::view('/tenant_dashboard', 'tenant_dashboard.index')->name('tenant_dashboard.index');

    // reservation routes (role-protected)
    Route::view('/myreservation', 'myreservation.index')->name('myreservation.index')
        ->middleware('role:tenant');
    Route::view('/reservation', 'reservation.index')->name('reservation.index')
        ->middleware('role:landlord');
    
});

 Route::get('/myprofile', function () {
        return view('myprofile.index');
    })->name('myprofile.index');


require __DIR__.'/auth.php';
