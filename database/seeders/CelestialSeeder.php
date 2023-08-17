<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\v1\Celestial;
use App\Models\v1\DockingStation;
use App\Models\v1\Image;
use App\Models\v1\Gate;

class CelestialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* ---------------------- Start Earth ---------------------- */
        // Celestial
        $celestial = new Celestial;
        $celestial->name = 'Earth';
        $celestial->water = '71';
        $celestial->temperature = '15';
        $celestial->flora = '80';
        $celestial->fauna = '60';
        $celestial->habitable = '49';
        $celestial->save();

            // Celestial Image
            $celestial_image = new Image;
            $celestial_image->filename = 'earth.png';
            $celestial_image->alt = 'Earth';
            $celestial->image()->save($celestial_image);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Taj Mahal India';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'taj-mahal-india.png';
                $docking_station_image->alt = 'Taj Mahal India';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'A1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B2';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'WW2';
                $gate->status = 'decommissioned';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'WZ12';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'AB42';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);


            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Moscow Red Square Russia';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'moscow-red-square.png';
                $docking_station_image->alt = 'Moscow Red Square Russia';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'A1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A3';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Washington DC America';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'washington-dc-america.png';
                $docking_station_image->alt = 'Washington DC America';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'A1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B2';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Eiffel Tower France';
            $docking_station->status = 'closed';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'eiffel-tower-france.png';
                $docking_station_image->alt = 'Eiffel Tower France';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'A1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A3';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B1';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B2';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

        /* ---------------------- End Earth ---------------------- */


        /* ---------------------- Start Moon ---------------------- */
        // Celestial
        $celestial = new Celestial;
        $celestial->name = 'Moon';
        $celestial->water = '40';
        $celestial->temperature = '14';
        $celestial->flora = '54';
        $celestial->fauna = '36';
        $celestial->habitable = '29';
        $celestial->save();

            // Celestial Image
            $celestial_image = new Image;
            $celestial_image->filename = 'moon.png';
            $celestial_image->alt = 'Moon';
            $celestial->image()->save($celestial_image);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Dark Side';
            $docking_station->status = 'closed';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'dark-side.png';
                $docking_station_image->alt = 'Dark Side';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'A1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A2';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A3';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B1';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Sector 43A';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'sector-43a.png';
                $docking_station_image->alt = 'Sector 43A';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'A1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A2';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A3';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B1';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Sector 42B';
            $docking_station->status = 'decommissioned';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'sector-42b.png';
                $docking_station_image->alt = 'Sector 42B';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'A1';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A2';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'A3';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B1';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'B3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

        /* ---------------------- End Moon ---------------------- */


        /* ---------------------- Start Venus ---------------------- */
        $celestial = new Celestial;
        $celestial->name = 'Venus';
        $celestial->water = '10';
        $celestial->temperature = '24';
        $celestial->flora = '14';
        $celestial->fauna = '6';
        $celestial->habitable = '5';
        $celestial->save();

            $celestial_image = new Image;
            $celestial_image->filename = 'venus.png';
            $celestial_image->alt = 'Venus';
            $celestial->image()->save($celestial_image);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Mount Maxwell';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'mount-maxwell.png';
                $docking_station_image->alt = 'Mount Maxwell';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'VA1';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VA2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VA3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VB1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VB2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VB3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Sector Danilova';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'sector-danilova.png';
                $docking_station_image->alt = 'Sector Danilova';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'VA1';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VA2';
                $gate->status = 'decommissioned';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VA3';
                $gate->status = 'decommissioned';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VB1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VB2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'VB3';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

        /* ---------------------- End Venus ---------------------- */


        /* ---------------------- Start Mars ---------------------- */
        $celestial = new Celestial;
        $celestial->name = 'Mars';
        $celestial->water = '60';
        $celestial->temperature = '14';
        $celestial->flora = '32';
        $celestial->fauna = '16';
        $celestial->habitable = '25';
        $celestial->save();

            $celestial_image = new Image;
            $celestial_image->filename = 'mars.png';
            $celestial_image->alt = 'Mars';
            $celestial->image()->save($celestial_image);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'IMSS';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'imss.png';
                $docking_station_image->alt = 'IMSS';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'MA1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MA2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MA3';
                $gate->status = 'decommissioned';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MB1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MB2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MB3';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MC1';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MC2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MC3';
                $gate->status = 'closed';
                $docking_station->gates()->save($gate);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Mars North Pole';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'mars-north-pole.png';
                $docking_station_image->alt = 'Mars North Pole';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'MNA1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MNA2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Mawrth Vallis';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'mawrth-vallis.png';
                $docking_station_image->alt = 'Mawrth Vallis';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'MMVA1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MMVA2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Iani Chaos';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'iani-chaos.png';
                $docking_station_image->alt = 'Iani Chaos';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'MICA1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'MICA2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

        /* ---------------------- End Mars ---------------------- */


        /* ---------------------- Start Jupiter ---------------------- */
        $celestial = new Celestial;
        $celestial->name = 'Jupiter';
        $celestial->water = '0.25';
        $celestial->temperature = '-110';
        $celestial->flora = '3';
        $celestial->fauna = '2';
        $celestial->habitable = '1';
        $celestial->save();

            $celestial_image = new Image;
            $celestial_image->filename = 'jupiter.png';
            $celestial_image->alt = 'Jupiter';
            $celestial->image()->save($celestial_image);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Great Red Spot';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'great-red-spot.png';
                $docking_station_image->alt = 'Great Red Spot';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'J1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'J2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'J3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'J4';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

        /* ---------------------- End Jupiter ---------------------- */


        /* ---------------------- Start Saturn ---------------------- */
        $celestial = new Celestial;
        $celestial->name = 'Saturn';
        $celestial->water = '20';
        $celestial->temperature = '-138';
        $celestial->flora = '2';
        $celestial->fauna = '0.9';
        $celestial->habitable = '0.3';
        $celestial->save();

            $celestial_image = new Image;
            $celestial_image->filename = 'saturn.png';
            $celestial_image->alt = 'Saturn';
            $celestial->image()->save($celestial_image);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'Rings of Saturn';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'rings-of-saturn.png';
                $docking_station_image->alt = 'Rings of Saturn';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'S1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'S2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'S3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'S4';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

        /* ---------------------- End Saturn ---------------------- */


        /* ---------------------- Start Neptune ---------------------- */
        $celestial = new Celestial;
        $celestial->name = 'Neptune';
        $celestial->water = '80';
        $celestial->temperature = '-218';
        $celestial->flora = '2';
        $celestial->fauna = '0.9';
        $celestial->habitable = '0.3';
        $celestial->save();

            $celestial_image = new Image;
            $celestial_image->filename = 'neptune.png';
            $celestial_image->alt = 'Neptune';
            $celestial->image()->save($celestial_image);

            // Docking Station
            $docking_station = new DockingStation;
            $docking_station->name = 'The Great Dark Spot';
            $docking_station->status = 'open';
            $celestial->dockingStations()->save($docking_station);

                // Docking Station Image
                $docking_station_image = new Image;
                $docking_station_image->filename = 'the-great-dark-spot.png';
                $docking_station_image->alt = 'The Great Dark Spot';
                $docking_station->image()->save($docking_station_image);

                // Gates
                $gate = new Gate;
                $gate->name = 'N1';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'N2';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'N3';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

                // Gates
                $gate = new Gate;
                $gate->name = 'N4';
                $gate->status = 'open';
                $docking_station->gates()->save($gate);

        /* ---------------------- End Neptune ---------------------- */
        

        /* ---------------------- Start Kepler-22b ---------------------- */
        $celestial = new Celestial;
        $celestial->name = 'Kepler-22b';
        $celestial->water = '50';
        $celestial->temperature = '6';
        $celestial->flora = '34';
        $celestial->fauna = '29';
        $celestial->habitable = '83';
        $celestial->save();

            $celestial_image = new Image;
            $celestial_image->filename = 'kepler-22b.png';
            $celestial_image->alt = 'Kepler-22b';
            $celestial->image()->save($celestial_image);

        /* ---------------------- End Kepler-22b ---------------------- */

    }
}
