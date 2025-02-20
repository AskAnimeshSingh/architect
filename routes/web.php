<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Builder\BuilderController;
use App\Http\Controllers\Compliance\ComplianceController;
use App\Http\Controllers\RolesPermission\RolesPermissionController;
use App\Http\Controllers\ProjectManagement\ProjectController;
use App\Http\Controllers\MyMunicipal\MyMunicipalController;


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
    // Example: Builder routes here
    // Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('builder-management/list', [BuilderController::class, 'index'])->name('builder.list');
    Route::get('builder-management/create', [BuilderController::class, 'create'])->name('builder.add');
    Route::post('builder-management/store', [BuilderController::class, 'store'])->name('builder.store');
    Route::get('builder-management/edit/{id}', [BuilderController::class, 'edit'])->name('builder.edit');
    Route::patch('builder-management/update/{id}', [BuilderController::class, 'update'])->name('builder.update');
    Route::delete('builder-management/delete/{id}', [BuilderController::class, 'destroy'])->name('builder.delete');


    // Example: compliance routes here
    Route::get('compliance/list', [ComplianceController::class, 'index'])->name('compliance.list');
    Route::get('compliance/create', [ComplianceController::class, 'create'])->name('compliance.add');
 // Example: roles permission routes here
    Route::get('roles', [RolesPermissionController::class, 'index'])->name('roles');

// Example: project management routes here
Route::get('project-management/list', [ProjectController::class, 'index'])->name('project.list');
    Route::get('project-management/create', [ProjectController::class, 'create'])->name('project.add');
    Route::post('project-management/store', [ProjectController::class,'store'])->name('project.store');
    Route::get('project-management/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::patch('project-management/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('project-management/delete/{id}', [ProjectController::class, 'destroy'])->name('project.delete');

    //mymunicipal routes
    Route::get('my-municipal/approve', [MyMunicipalController::class, 'index'])->name('mymunicipal.approve');
    Route::get('my-municipal/objection', [MyMunicipalController::class, 'objection'])->name('mymunicipal.objection');

});


require __DIR__.'/auth.php';
