<?php

use App\Http\Controllers\v1\AdminController;
use App\Http\Controllers\v1\UserController;
use Illuminate\Support\Facades\Route;

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
    Route::post('/user/register', [UserController::class, 'createUser'])->name('api.v1.user.register');
    Route::post('/user/login', [UserController::class, 'loginUser'])->name('api.v1.user.login');

    // Admin login
    Route::post('/admin/register', [AdminController::class, 'createAdmin'])->name('api.v1.admin.register');
    Route::post('/admin/login', [AdminController::class, 'loginAdmin'])->name('api.v1.admin.login');

    // Profile Details
    Route::post('/{type}/profile/{user_id}', [ProfileController::class, 'profileDetails'])
        ->whereIn('type', ['user', 'admin'])
        ->whereNumber('user_id')
        ->name('api.v1.profile');

});