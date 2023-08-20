<?php

namespace Database\Seeders;

use App\Models\v1\ServiceProvider;
use App\Models\v1\SpaceShip;
use Illuminate\Database\Seeder;

class SpaceShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Service Provider
        $service_provider = ServiceProvider::find(1);

        // Spaceship
        $space_ship = new SpaceShip();
        $space_ship->name = 'Death Star';
        $space_ship->model = 'Boeing 857';
        $space_ship->registration_number = 'EM 12';
        $space_ship->number_of_seats = 36;
        $space_ship->status = 'hanger';
        $space_ship->serviceProvider()->associate($service_provider);
        $space_ship->save();
        

        // Service Provider
        $service_provider = ServiceProvider::find(1);

        // Spaceship
        $space_ship = new SpaceShip();
        $space_ship->name = 'Roket';
        $space_ship->model = 'Airbus M340';
        $space_ship->registration_number = 'EM 14';
        $space_ship->number_of_seats = 42;
        $space_ship->status = 'hanger';
        $space_ship->serviceProvider()->associate($service_provider);
        $space_ship->save();


        // Service Provider
        $service_provider = ServiceProvider::find(2);

        // Spaceship
        $space_ship = new SpaceShip();
        $space_ship->name = 'Medusa';
        $space_ship->model = 'Airbus M340-400';
        $space_ship->registration_number = 'EM 15';
        $space_ship->number_of_seats = 60;
        $space_ship->status = 'repairing';
        $space_ship->serviceProvider()->associate($service_provider);
        $space_ship->save();


        // Service Provider
        $service_provider = ServiceProvider::find(3);

        // Spaceship
        $space_ship = new SpaceShip();
        $space_ship->name = 'Kenura';
        $space_ship->model = 'KRAG A20';
        $space_ship->registration_number = 'EM 13';
        $space_ship->number_of_seats = 20;
        $space_ship->status = 'active';
        $space_ship->serviceProvider()->associate($service_provider);
        $space_ship->save();


        // Service Provider
        $service_provider = ServiceProvider::find(3);

        // Spaceship
        $space_ship = new SpaceShip();
        $space_ship->name = 'Iron Man';
        $space_ship->model = 'Airbus A100';
        $space_ship->registration_number = 'EM 25';
        $space_ship->number_of_seats = 24;
        $space_ship->status = 'active';
        $space_ship->serviceProvider()->associate($service_provider);
        $space_ship->save();
    }
}
