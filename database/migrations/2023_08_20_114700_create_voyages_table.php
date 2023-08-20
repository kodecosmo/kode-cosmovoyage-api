<?php

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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_gate_id')->unsigned();
            $table->unsignedBigInteger('to_gate_id')->unsigned();
            $table->float('time');
            $table->timestamps();
        
            $table->foreign('from_gate_id')->references('id')->on('gates');
            $table->foreign('to_gate_id')->references('id')->on('gates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
