<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function celestial(): BelongsTo
    {
        return $this->belongsTo(Celestial::class);
    }

    public function dockingStation(): BelongsTo
    {
        return $this->belongsTo(DockingStation::class);
    }
}
