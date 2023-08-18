<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Celestial extends Model
{
    use HasFactory;

    // relative to the root/storage/app/public/
    public static string $imageLocation = "/planets";
    public static string $tempUnit = "C";

    // The attributes that are mass assignable.

    protected $fillable = [
        'name',
        'water',
        'temperature',
        'flora',
        'fauna',
        'habitable',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function dockingStations(): HasMany
    {
        return $this->hasMany(DockingStation::class);
    }
}
