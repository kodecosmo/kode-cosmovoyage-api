<?php

use App\Http\Controllers\v1\AdminController;
use App\Http\Controllers\v1\ProfileController;
use App\Http\Controllers\v1\UserController;
use Illuminate\Support\Facades\Route;

// Models
use App\Models\v1\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group.
|
*/

Route::prefix('v1')->group(function () {
    // Matches The "/v1/register" URL

    // User login
    Route::post('/user/login', [UserController::class, 'loginUser'])->name('api.v1.user.login');
    Route::post('/user/register', [UserController::class, 'createUser'])->name('api.v1.user.register');

    // Admin login
    Route::post('/admin/login', [AdminController::class, 'loginAdmin'])->name('api.v1.admin.login');

    Route::middleware(['auth:sanctum'])->prefix('admin')->group(function () {
        Route::post('/admin/register', [AdminController::class, 'createAdmin'])->name('api.v1.admin.register');
    });

    // Profile Details
    Route::get('/profile/{user_id?}', [ProfileController::class, 'profileDetails'])
        ->whereNumber('user_id')
        ->middleware('auth:sanctum')
        ->name('api.v1.profile');

    // Book a Travel
    Route::get('/book/{user_id?}', [BookingController::class, 'Book'])
        ->whereNumber('user_id')
        ->middleware('auth:sanctum')
        ->name('api.v1.book');

});