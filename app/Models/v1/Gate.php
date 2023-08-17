<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gate extends Model
{
    use HasFactory;

    public function dockingStation(): BelongsTo
    {
        return $this->belongsTo(DockingStation::class);
    }

}
