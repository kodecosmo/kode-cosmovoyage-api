<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Models
use App\Models\v1\Image;
use App\Models\v1\Celestial;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('docking_stations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['open', 'closed', 'decommissioned']);
            $table->foreignIdFor(Celestial::class);
            $table->foreignIdFor(Image::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docking_stations');
    }
};
