<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Celestial extends Model
{
    use HasFactory;

    // relative to the root/storage/app/public/
    public static string $imageLocation = "/planets";
    public static string $tempUnit = "C";

    public function image(): HasOne
    {
        return $this->hasOne(Image::class);
    }

    public function dockingStations(): HasMany
    {
        return $this->hasMany(DockingStation::class);
    }
}
