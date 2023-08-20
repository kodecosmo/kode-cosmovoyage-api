<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreVoyageRequest;
use App\Http\Requests\v1\UpdateVoyageRequest;
use App\Models\v1\Voyage;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {       
            $voyages = Voyage::all();

            return response()->json([
                'success' => true,
                'message' => 'All voyage records.',
                'data' => $voyages,
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
    public function store(StoreVoyageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Voyage $voyage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoyageRequest $request, Voyage $voyage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voyage $voyage)
    {
        //
    }
}
