<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| TENANT DASHBOARD
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| AUTH MIDDLEWARE GROUP
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | BROWSE BOARDING HOUSE (ALL USERS)
    |--------------------------------------------------------------------------
    */
    Route::view('/browse-boarding-house', 'browse_boarding_house.index')
        ->name('browse_boarding_house.index');

    /*
    |--------------------------------------------------------------------------
    | USER MANAGEMENT
    |--------------------------------------------------------------------------
    */
    Route::resource('users', \App\Http\Controllers\UserController::class);

    /*
    |--------------------------------------------------------------------------
    | CHAT
    |--------------------------------------------------------------------------
    */
    Route::view('/chat', 'chat.index')->name('chat.index');

    /*
    |--------------------------------------------------------------------------
    | TENANT RESERVATION (NO ROLE RESTRICTION)
    |--------------------------------------------------------------------------
    */
    Route::view('/myreservation', 'myreservation.index')
        ->name('myreservation.index');

    /*
    |--------------------------------------------------------------------------
    | LANDLORD DASHBOARD (NO ROLE RESTRICTION)
    |--------------------------------------------------------------------------
    */
    Route::view('/landlord/dashboard', 'LandlordDashboard.LandlordDashboard')
        ->name('landlord.dashboard');

    /*
    |--------------------------------------------------------------------------
    | LANDLORD - MY BOARDING HOUSES
    |--------------------------------------------------------------------------
    */
    Route::view('/landlord/my-boarding-houses', 'Landlord_MyboardingHouses.index')
        ->name('landlord.myboardinghouses.index');

    /*
    |--------------------------------------------------------------------------
    | LANDLORD - RESERVATIONS
    |--------------------------------------------------------------------------
    */
    Route::view('/landlord/reservations', 'Landlord_reservations.index')
        ->name('landlord.reservations.index');

});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';