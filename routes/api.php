<?php

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
    Route::post('/user/register', [UserController::class, 'createUser'])->name('api.v1.user.register');
    Route::post('/user/login', [UserController::class, 'loginUser'])->name('api.v1.user.login');
});