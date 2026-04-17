<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/browse-boarding-house', function () {
        return view('browse_boarding_house.index');
    })->name('browse_boarding_house.index');
    Route::resource('users', \App\Http\Controllers\UserController::class);

    // chat route
    Route::view('/chat', 'chat.index')->name('chat.index');

    // reservation routes (role-protected)
    Route::view('/myreservation', 'myreservation.index')->name('myreservation.index')
        ->middleware('role:tenant');
    Route::view('/reservation', 'reservation.index')->name('reservation.index')
        ->middleware('role:landlord');
});


require __DIR__.'/auth.php';
