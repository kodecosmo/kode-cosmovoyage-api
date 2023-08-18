<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Gate;
use Illuminate\Http\Request;

class GateController extends Controller
{

    public function dockingStationGates(string $docking_station_id)
    {
        try {       
            $gates = Gate::where('docking_station_id', $docking_station_id)->get();

            return response()->json([
                'success' => true,
                'message' => 'All gate records inside the given celestial.',
                'data' => $gates,
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
     * Display a listing of the resource.
     */
    public function index()
    {
        try {       
            $gates = Gate::all();

            return response()->json([
                'success' => true,
                'message' => 'All gate records.',
                'data' => $gates,
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
    public function store(Request $request)
    {
        /* 
        * `StoreGateRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {  

                /* 
                * Currently image upload is not working and need to be added 
                */
                $gate = new Gate;
                $gate->name = $request->name;
                $gate->status = $request->status;
                $gate->save();

                return response()->json([
                    'success' => true,
                    'message' => '`'.$gate->name.'` gate record.',
                    'data' => $gate,
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 14,
                    /*'data' => [$th->getMessage()] */
                ], 500);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Not Found.',
                'error_code' => 404,
                /*'data' => [$th->getMessage()] */
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {       
            $gate = Gate::find($id);

            return response()->json([
                'success' => true,
                'message' => '`'.$gate->name.'` gate record.',
                'data' => $gate,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 15,
                /*'data' => [$th->getMessage()] */
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /* 
        * `UpdateGateRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {       

                /* 
                * Currently image upload is not working and need to be added 
                */
                $gate = Gate::find($id);
                $gate->name = $request->name;
                $gate->status = $request->status;
                $gate->save();

                return response()->json([
                    'success' => true,
                    'message' => '`'.$gate->name.'` gate record.',
                    'data' => $gate,
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 16,
                    /*'data' => [$th->getMessage()] */
                ], 500);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Not Found.',
                'error_code' => 404,
                /*'data' => [$th->getMessage()] */
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        /* 
        * `DeleteGateRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {
                $gate = Gate::find($id);
                $gate->delete();

                return response()->json([
                    'success' => true,
                    'message' => 'Gate record deleted successfully.',
                    /*'data' => [],*/
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 17,
                    /*'data' => [$th->getMessage()] */
                ], 500);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Not Found.',
                'error_code' => 404,
                /*'data' => [$th->getMessage()] */
            ], 404);
        }
    }
}
