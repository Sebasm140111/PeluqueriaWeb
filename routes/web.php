<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home pública
Route::view('/', 'home')->name('home');

// Dashboard (si lo usás)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas (usuario logueado + email verificado)
Route::middleware(['auth','verified'])->group(function () {
    Route::view('/reservar', 'reservar')->name('reservar'); // vista protegida
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
