<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\v1\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $earth = Image::create([
            'filename' => 'earth.png',
            'alt' => 'Earth',
        ]);

        $moon = Image::create([
            'filename' => 'moon.png',
            'alt' => 'Moon',
        ]);

        $mars = Image::create([
            'filename' => 'mars.png',
            'alt' => 'Mars',
        ]);

        $venus = Image::create([
            'filename' => 'venus.png',
            'alt' => 'Venus',
        ]);
    }
}
