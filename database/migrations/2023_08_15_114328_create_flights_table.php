<?php

use App\Models\v1\SpaceShip;
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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->json('voyages'); // [1, 2] : each represent the voyages ids
            $table->enum('category', ['direct', 'layover', 'space_jump']);
            $table->foreignIdFor(SpaceShip::class);
            $table->json('seat_configuration');
            /*
                seat_configuration =>
                {
                    user_id_1: [ seat_number_1, seat_number_2, seat_number_3 ],
                    user_id_2: [ seat_number_1, seat_number_2, seat_number_3 ],
                    user_id_3: [ seat_number_1, seat_number_2, seat_number_3 ],   
                } 
            */
            $table->dateTime('departure');
            $table->enum('status', ['preparing', 'loading', 'traveling', 'emergency_land', 'canceled']);
            $table->unsignedBigInteger('landed_gate_id')->unsigned()->nullable();
            $table->dateTime('landed_date_time')->nullable();
            $table->timestamps();

            $table->foreign('landed_gate_id')->references('id')->on('gates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
