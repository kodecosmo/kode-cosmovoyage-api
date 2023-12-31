<?php

use App\Models\v1\ServiceProvider;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('space_ships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('registration_number');
            $table->integer('number_of_seats');
            $table->enum('status', ['active', 'repairing', 'hanger', 'decommissioned']);
            $table->foreignIdFor(ServiceProvider::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('space_ships');
    }
};
