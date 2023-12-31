<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreFlightRequest;
use App\Http\Requests\v1\UpdateFlightRequest;
use App\Models\v1\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {       
            $flights = Flight::with('spaceShip')->get();

            return response()->json([
                'success' => true,
                'message' => 'All flight records.',
                'data' => $flights,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 13,
                'data' => [$th->getMessage()]
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
