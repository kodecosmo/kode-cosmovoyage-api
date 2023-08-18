<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    // relative to the root/storage/app/public/
    public static string $imageLocation = "/service-providers";

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
