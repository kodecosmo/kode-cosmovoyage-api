<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    // relative to the root/storage/app/public/
    public static string $imageLocation = "/service-providers";

    public function image(): HasOne
    {
        return $this->hasOne(Image::class);
    }
}
