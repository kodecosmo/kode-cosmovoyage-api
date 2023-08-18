<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function celestial(): HasOne
    {
        return $this->hasOne(Celestial::class);
    }

    public function dockingStation(): HasOne
    {
        return $this->hasOne(DockingStation::class);
    }

    public function serviceProvider(): HasOne
    {
        return $this->hasOne(ServiceProvider::class);
    }
}
