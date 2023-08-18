<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Image;
use App\Models\v1\ServiceProvider;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {       
            $service_providers = ServiceProvider::with('image')->get();

            return response()->json([
                'success' => true,
                'message' => 'All service provider records.',
                'data' => $service_providers,
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
        * `StoreServiceProviderRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {       

                /* 
                * Currently image upload is not working and need to be added 
                */
                $service_provider_image = new Image();
                $service_provider_image->filename = $request->filename;
                $service_provider_image->alt = $request->alt;
                $service_provider_image->save();
                        
                $service_provider = new ServiceProvider;
                $service_provider->name = $request->name;
                $service_provider->status = $request->status;
                $service_provider->image()->associate($service_provider_image);
                $service_provider->save();

                return response()->json([
                    'success' => true,
                    'message' => '`'.$service_provider->name.'` service provider record.',
                    'data' => $service_provider,
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
            $service_provider = ServiceProvider::with('image')->whereId($id)->first();

            return response()->json([
                'success' => true,
                'message' => '`'.$service_provider->name.'` service provider record.',
                'data' => $service_provider,
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
        * `UpdateServiceProviderRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {     
                
                /* 
                * Currently image upload is not working and need to be added 
                */
                $service_provider_image = new Image();
                $service_provider_image->filename = $request->filename;
                $service_provider_image->alt = $request->alt;
                $service_provider_image->save();

                $service_provider = ServiceProvider::find($id);
                $service_provider->name = $request->name;
                $service_provider->status = $request->status;
                $service_provider->image()->associate($service_provider_image);
                $service_provider->save();

                return response()->json([
                    'success' => true,
                    'message' => '`'.$service_provider->name.'` service provider record.',
                    'data' => $service_provider,
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
        * `DeleteServiceProviderRequest Validation`
        * Currently validations are not working and should be integrated. 
        */
        if ($request->user()->tokenCan('admin')) {
            try {       
                $service_provider = ServiceProvider::find($id);
                $service_provider->delete();
                $service_provider_image = Image::destroy($service_provider->image_id);

                return response()->json([
                    'success' => true,
                    'message' => 'service provider record deleted successfully.',
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
