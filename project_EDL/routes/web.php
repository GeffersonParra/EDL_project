<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth', 'verified', 'employee')->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'show'])->name('dashboard');
    Route::get('/my_profile', [EmployeeController::class, 'profile'])->name('my_profile');
    Route::get('/my_profile/edit', [EmployeeController::class, 'edit'])->name('my_profile.edit');
    Route::put('/my_profile/edit/{id}', [EmployeeController::class, 'update'])->name('my_profile.update');
    Route::get('/reports', [ReportController::class, 'show'])->name('reports');
    Route::get('/reports/new', [ReportController::class, 'new'])->name('reports.new');
    Route::post('/reports/new', [ReportController::class, 'generate'])->name('reports.create');
    Route::get('/reports/download/{name}', [ReportController::class, 'download_pdf'])->name('reports.download');
    Route::delete('/reports/delete/{id}', [ReportController::class, 'delete'])->name('reports.delete');
});

Route::middleware('auth', 'admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/my_profile', [AdminController::class, 'profile'])->name('admin.my_profile');
    Route::get('admin/my_profile/edit', [AdminController::class, 'edit'])->name('admin.my_profile.edit');
    Route::put('admin/my_profile/edit/{id}', [AdminController::class, 'update'])->name('admin.my_profile.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
