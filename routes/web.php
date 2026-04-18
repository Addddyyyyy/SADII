<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BoardingHouseController;

/*
|--------------------------------------------------------------------------
| Welcome Page
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Product Details
|--------------------------------------------------------------------------
*/
Route::get('/product-details', function () {
    return view('product_details.index');
})->middleware(['auth'])->name('product.details');

/*
|--------------------------------------------------------------------------
| AUTH MIDDLEWARE GROUP
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    |-------------------------
    | Profile
    |-------------------------
    */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |-------------------------
    | Browse Boarding House
    |-------------------------
    */
    Route::get('/browse-boarding-house', function () {
        return view('browse_boarding_house.index');
    })->name('browse_boarding_house.index');

    /*
    |-------------------------
    | Users
    |-------------------------
    */
    Route::resource('users', \App\Http\Controllers\UserController::class);

    /*
    |-------------------------
    | Chat
    |-------------------------
    */
    Route::view('/chat', 'chat.index')->name('chat.index');

    /*
    |-------------------------
    | TENANT RESERVATION
    |-------------------------
    */
    Route::view('/myreservation', 'myreservation.index')
        ->name('myreservation.index')
        ->middleware('role:tenant');

    /*
    |-------------------------
    | LANDLORD RESERVATION
    |-------------------------
    */
    Route::view('/reservation', 'reservation.index')
        ->name('reservation.index')
        ->middleware('role:landlord');

    /*
    |-------------------------
    | LANDLORD DASHBOARD (NEW)
    |-------------------------
    */
    Route::get('/landlord/dashboard', function () {
        return view('landlord.landlord_dashboard');
    })->name('landlord.dashboard');

});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';