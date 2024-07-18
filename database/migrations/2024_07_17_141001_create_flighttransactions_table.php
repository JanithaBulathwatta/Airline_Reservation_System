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
        Schema::create('flighttransactions', function (Blueprint $table) {
            $table->id();
            $table->string('seatNumber');
            $table->string('date');
            $table->string('fare');
            $table->foreignId('passenger_id')->constrained('passenges');
            $table->foreignId('flightmaster_id')->constrained('flightmasters');
            $table->foreignId('aircraft_id')->constrained('aircraft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flighttransactions');
    }
};
