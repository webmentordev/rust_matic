<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'is_admin', 'verified'])->name('dashboard');
Route::post('dashboard/update/status/{user:id}', [DashboardController::class, 'store'])->middleware(['auth', 'is_admin', 'verified'])->name('update.status');

Route::get('client', function () {
    return view('client');
})->name('client');

Route::get('servers', [ServerController::class, 'index'])->name('server');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';