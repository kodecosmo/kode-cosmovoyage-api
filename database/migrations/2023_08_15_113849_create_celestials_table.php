<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Models
use App\Models\v1\Image;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('celestials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('water');
            $table->integer('temperature');
            $table->integer('flora');
            $table->integer('fauna');
            $table->enum('habitable', [true, false]);
            $table->foreignIdFor(Image::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celestials');
    }
};
