<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Builder\BuilderController;

// Guest routes (login & register)
Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

// Protected routes (requires authentication)
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');  // Dashboard route with prefix

    // Profile routes with prefix
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');  // Edit Profile
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');  // Update Profile
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');  // Delete Profile
    });

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Other routes can be added with the same method:
Route::middleware('auth')->prefix('')->group(function () {
    // Example: Admin routes here
    // Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('builder-management/list', [BuilderController::class, 'index'])->name('builder.list');

});

require __DIR__.'/auth.php';
