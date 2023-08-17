<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\DockingStation;
use App\Models\v1\Image;
use Illuminate\Http\Request;

class DockingStationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {       
            $docking_stations = DockingStation::all();

            return response()->json([
                'success' => true,
                'message' => 'All docking station records.',
                'data' => [$docking_stations],
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 13,
                /*'data' => [$th->geMessage()] */
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* 
        * `StoreDockingStationRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {       
                $docking_station = new DockingStation;
                $docking_station->name = $request->name;
                $docking_station->status = $request->status;
                
                $docking_station->save();

                /* 
                * Currently image upload is not working and need to be added 
                */
                $docking_station_iamge = new Image();
                $docking_station_iamge->filename = $request->filename;
                $docking_station_iamge->alt = $request->alt;

                $docking_station->image()->save($docking_station_iamge);

                return response()->json([
                    'success' => true,
                    'message' => '`'.$docking_station->name.'` docking station record.',
                    'data' => [$docking_station],
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 14,
                    /*'data' => [$th->geMessage()] */
                ], 500);
            }
        }else{
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {       
            $docking_station = DockingStation::find($id);

            return response()->json([
                'success' => true,
                'message' => '`'.$docking_station->name.'` docking station record.',
                'data' => [$docking_station],
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 15,
                /*'data' => [$th->geMessage()] */
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /* 
        * `UpdateCelestialRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {       
                $docking_station = DockingStation::find($id);
                $docking_station->name = $request->name;
                $docking_station->status = $request->status;
                
                $docking_station->save();

                /* 
                * Currently image upload is not working and need to be added 
                */
                $docking_station_image = new Image();
                $docking_station_image->filename = $request->filename;
                $docking_station_image->alt = $request->alt;

                $docking_station->image()->save($docking_station_image);

                return response()->json([
                    'success' => true,
                    'message' => '`'.$docking_station->name.'` docking station record.',
                    'data' => [$docking_station],
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 16,
                    /*'data' => [$th->geMessage()] */
                ], 500);
            }
        }else{
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        /* 
        * `DeleteCelestialRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {       
                $docking_station = DockingStation::destroy($id);

                return response()->json([
                    'success' => true,
                    'message' => 'Docking station record deleted successfully.',
                    /*'data' => [],*/
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 17,
                    /*'data' => [$th->geMessage()] */
                ], 500);
            }
        }else{
            abort(404);
        }
    }
}
