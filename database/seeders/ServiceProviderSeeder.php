<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\v1\Image;
use App\Models\v1\ServiceProvider;

class ServiceProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* ---------------------- Start Fly Emirates ---------------------- */
    
        // Service Provider Image
        $service_provider_image = new Image;
        $service_provider_image->filename = 'fly-emirates.png';
        $service_provider_image->alt = 'Fly Emirates';
        $service_provider_image->save();
    
        // Service Provider
        $service_provider = new ServiceProvider();
        $service_provider->name = 'Fly Emirates';
        $service_provider->status = 'inactive';
        $service_provider->image()->associate($service_provider_image);
        $service_provider->save();

        /* ---------------------- End Fly Emirates ---------------------- */

        
        /* ---------------------- Start Jetstar ---------------------- */

        // Service Provider Image
        $service_provider_image = new Image;
        $service_provider_image->filename = 'jetstar.png';
        $service_provider_image->alt = 'Jetstar';
        $service_provider_image->save();

        // Service Provider
        $service_provider = new ServiceProvider();
        $service_provider->name = 'Jetstar';
        $service_provider->status = 'active';
        $service_provider->image()->associate($service_provider_image);
        $service_provider->save();

        /* ---------------------- End Jetstar ---------------------- */

        
        /* ---------------------- Start Lufthansa ---------------------- */
        
        // Service Provider Image
        $service_provider_image = new Image;
        $service_provider_image->filename = 'lufthansa.png';
        $service_provider_image->alt = 'Lufthansa';
        $service_provider_image->save();

        // Service Provider
        $service_provider = new ServiceProvider();
        $service_provider->name = 'Lufthansa';
        $service_provider->status = 'active';
        $service_provider->image()->associate($service_provider_image);
        $service_provider->save();

        /* ---------------------- End Lufthansa ---------------------- */
        
        
        /* ---------------------- Start Ryanair ---------------------- */
    
        // Service Provider Image
        $service_provider_image = new Image;
        $service_provider_image->filename = 'ryanair.png';
        $service_provider_image->alt = 'Ryanair';
        $service_provider_image->save();

        // Service Provider
        $service_provider = new ServiceProvider();
        $service_provider->name = 'Ryanair';
        $service_provider->status = 'active';
        $service_provider->image()->associate($service_provider_image);
        $service_provider->save();

        /* ---------------------- End Ryanair ---------------------- */
        
        
        /* ---------------------- Start United ---------------------- */

        // Service Provider Image
        $service_provider_image = new Image;
        $service_provider_image->filename = 'united.png';
        $service_provider_image->alt = 'United';
        $service_provider_image->save();

        // Service Provider
        $service_provider = new ServiceProvider();
        $service_provider->name = 'United';
        $service_provider->status = 'active';
        $service_provider->image()->associate($service_provider_image);
        $service_provider->save();

        /* ---------------------- End United ---------------------- */

    }
}
