<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\v1\Celestial;
use App\Models\v1\Image;

class CelestialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Earth
        $celestial = new Celestial;
        $celestial->name = 'Earth';
        $celestial->water = '71';
        $celestial->temperature = '15';
        $celestial->flora = '80';
        $celestial->fauna = '60';
        $celestial->habitable = '49';
        $celestial->save();

        $celestial_image = new Image;
        $celestial_image->filename = 'earth.png';
        $celestial_image->alt = 'Earth';
        $celestial->image()->save($celestial_image);

        // Moon
        $celestial = new Celestial;
        $celestial->name = 'Moon';
        $celestial->water = '40';
        $celestial->temperature = '14';
        $celestial->flora = '54';
        $celestial->fauna = '36';
        $celestial->habitable = '29';
        $celestial->save();

        $celestial_image = new Image;
        $celestial_image->filename = 'moon.png';
        $celestial_image->alt = 'Moon';
        $celestial->image()->save($celestial_image);

        // Venus
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

        // Mars
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

        // Jupiter
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

        // Saturn
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

        // Neptune
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

        // Kepler-22b
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

    }
}
