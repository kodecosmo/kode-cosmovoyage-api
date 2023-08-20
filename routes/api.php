<?php

use App\Http\Controllers\v1\CelestialController;
use App\Http\Controllers\v1\DockingStationController;
use App\Http\Controllers\v1\AdminController;
use App\Http\Controllers\v1\FlightController;
use App\Http\Controllers\v1\GateController;
use App\Http\Controllers\v1\ProfileController;
use App\Http\Controllers\v1\ServiceProviderController;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\VoyageController;
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
    Route::post('user/login', [UserController::class, 'loginUser'])->name('api.v1.user.login');
    Route::post('user/register', [UserController::class, 'createUser'])->name('api.v1.user.register');

    // Admin login
    Route::post('admin/login', [AdminController::class, 'loginAdmin'])->name('api.v1.admin.login');

    Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
        Route::post('admin/register', [AdminController::class, 'createAdmin'])->name('api.v1.admin.register');
    });

    // Profile Details
    Route::get('profile/{user_id?}', [ProfileController::class, 'profileDetails'])
        ->whereNumber('user_id')
        ->middleware('auth:sanctum')
        ->name('api.v1.profile');

    // Book a Travel
    Route::get('book/{user_id?}', [BookingController::class, 'Book'])
        ->whereNumber('user_id')
        ->middleware('auth:sanctum')
        ->name('api.v1.book');

    Route::middleware('auth:sanctum')->group(function () {
        
        // Get the list of celestials and relavent celestials
        Route::apiResource('celestials', CelestialController::class);

        /* --------------------------------------------------------------------------- */

        // Get the list of docking stations inside relavent celestial
        Route::get('celestials/{celestial_id}/docking-stations', [DockingStationController::class, 'celestialDockingStations'])
            ->whereNumber('celestial_id')
            ->name('api.v1.celestial-x.docking-stations');

        // Get the list of docking stations and relavent docking stations
        Route::apiResource('docking-stations', DockingStationController::class);

        /* --------------------------------------------------------------------------- */

        // Get the list of gates inside relavent docking-stations
        Route::get('docking-stations/{docking_station_id}/gates', [GateController::class, 'dockingStationGates'])
            ->whereNumber('docking_station_id')
            ->name('api.v1.docking-stations-x.gates');

        // Get the list of gates and relavent gates
        Route::apiResource('gates', GateController::class);

        /* --------------------------------------------------------------------------- */

        // Get the list of flights available for booking.
        Route::apiResource('flights', FlightController::class);

        /* --------------------------------------------------------------------------- */

        // Get the list of voyages.
        Route::apiResource('voyages', VoyageController::class);

        /* --------------------------------------------------------------------------- */

        // Get the list of service-providers
        Route::apiResource('service-providers', ServiceProviderController::class);
    });

});