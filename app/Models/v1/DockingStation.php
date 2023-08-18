<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class DockingStation extends Model
{
    use HasFactory;

    // relative to the root/storage/app/public/
    public static string $imageLocation = "/docking-stations";

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
    
    public function celestial(): BelongsTo
    {
        return $this->belongsTo(Celestial::class);
    }

    public function gates(): HasMany
    {
        return $this->hasMany(Gate::class);
    }
}
