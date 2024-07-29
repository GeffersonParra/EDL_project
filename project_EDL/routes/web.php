<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\RolMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'show'])->name('dashboard');
    Route::get('/my_profile', [EmployeeController::class, 'profile'])->name('my_profile');
    Route::get('/my_profile/edit', [EmployeeController::class, 'edit'])->name('my_profile.edit');
    Route::put('/my_profile/edit/{id}', [EmployeeController::class, 'update'])->name('my_profile.update');
});

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(RolMiddleware::class)->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
