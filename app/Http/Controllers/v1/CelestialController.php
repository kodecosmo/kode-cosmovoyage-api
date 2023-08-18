<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Celestial;
use App\Models\v1\Image;
use Illuminate\Http\Request;

class CelestialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {       
            $celestials = Celestial::with('image')->get();

            return response()->json([
                'success' => true,
                'message' => 'All celestial records.',
                'data' => $celestials,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 8,
                /*'data' => [$th->getMessage()] */
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* 
        * `StoreCelestialRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {       

                /* 
                * Currently image upload is not working and need to be added 
                */
                $celestial_image = new Image();
                $celestial_image->filename = $request->filename;
                $celestial_image->alt = $request->alt;
                $celestial_image->save();
                        
                $celestial = new Celestial;
                $celestial->name = $request->name;
                $celestial->water = $request->water;
                $celestial->temperature = $request->temperature;
                $celestial->flora = $request->flora;
                $celestial->fauna = $request->fauna;
                $celestial->habitable = $request->habitable;
                $celestial->image()->associate($celestial_image);
                $celestial->save();

                return response()->json([
                    'success' => true,
                    'message' => '`'.$celestial->name.'` celestial record.',
                    'data' => $celestial,
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 9,
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
            $celestial = Celestial::with('image')->whereId($id)->first();

            return response()->json([
                'success' => true,
                'message' => '`'.$celestial->name.'` celestial record.',
                'data' => $celestial,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 10,
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
        * `UpdateCelestialRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {     
                
                /* 
                * Currently image upload is not working and need to be added 
                */
                $celestial_image = new Image();
                $celestial_image->filename = $request->filename;
                $celestial_image->alt = $request->alt;
                $celestial_image->save();

                $celestial = Celestial::find($id);
                $celestial->name = $request->name;
                $celestial->water = $request->water;
                $celestial->temperature = $request->temperature;
                $celestial->flora = $request->flora;
                $celestial->fauna = $request->fauna;
                $celestial->habitable = $request->habitable;
                $celestial->image()->associate($celestial_image);
                $celestial->save();

                return response()->json([
                    'success' => true,
                    'message' => '`'.$celestial->name.'` celestial record.',
                    'data' => $celestial,
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 11,
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
        * `DeleteCelestialRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {       
                $celestial = Celestial::find($id);
                $celestial->delete();
                $celestial_image = Image::destroy($celestial->image_id);

                return response()->json([
                    'success' => true,
                    'message' => 'celestial record deleted successfully.',
                    /*'data' => [],*/
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unexpected server error.',
                    'error_code' => 12,
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
