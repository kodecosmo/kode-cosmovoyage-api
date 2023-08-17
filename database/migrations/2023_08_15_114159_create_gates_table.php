<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Models
use App\Models\v1\Image;
use App\Models\v1\DockingStation;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['open', 'closed', 'decommissioned']);
            $table->foreignIdFor(DockingStation::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gates');
    }
};
