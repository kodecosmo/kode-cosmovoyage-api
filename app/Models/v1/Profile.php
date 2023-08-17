<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.

    protected $fillable = [
        'first_name',
        'last_name',
        'contact_number',
        'email',
        'gender',
    ];

    // The attributes that should be hidden for serialization.
    
    protected $hidden = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
