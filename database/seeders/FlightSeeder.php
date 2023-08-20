<?php

namespace Database\Seeders;

use App\Models\v1\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Voyage : Dark Side ( Moon ) -> Mawrth Vallis ( Mars )
        $flight = new Flight();
        $flight->from_gate_id = 28;
        $flight->to_gate_id = 65;
        $flight->time = 4.7;
        $flight->save();

    }
}
