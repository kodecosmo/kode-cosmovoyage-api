<?php

namespace Database\Seeders;

use App\Models\v1\Flight;
use App\Models\v1\SpaceShip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Service Provider
        $space_ship = SpaceShip::find(4);

        // Flight : Washington DC America -> Dark Side ( Moon ) -> Mawrth Vallis ( Mars )
        $flight = new Flight();
        $flight->voyages = json_encode([ 3, 10 ]);
        $flight->category = 'layover';
        $flight->spaceShip()->associate($space_ship);
        $flight->seat_configuration = json_encode([]);
        $flight->departure = date_format(date_create("2023-09-01"),"Y/m/d H:i:s");
        $flight->status = 'preparing';
        $flight->save();


        // Service Provider
        $space_ship = SpaceShip::find(5);

        // Flight : Mawrth Vallis ( Mars ) -> Dark Side ( Moon ) -> Washington DC America 
        $flight = new Flight();
        $flight->voyages = json_encode([ 9, 4 ]);
        $flight->category = 'layover';
        $flight->spaceShip()->associate($space_ship);
        $flight->seat_configuration = json_encode([]);
        $flight->departure = date_format(date_create("2023-09-10"),"Y/m/d H:i:s");
        $flight->status = 'preparing';
        $flight->save();

    }
}
