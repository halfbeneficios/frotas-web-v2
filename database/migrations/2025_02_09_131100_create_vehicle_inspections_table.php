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
        Schema::create('vehicle_inspections', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->timestamp('checklist_date')->nullable();
            $table->integer('km')->nullable();
            $table->integer('fuel_level')->nullable();
            $table->boolean('dvd_player')->default(false);
            $table->boolean('extinguisher')->default(false);
            $table->boolean('steppe')->default(false);
            $table->boolean('air_conditioning')->default(false);
            $table->boolean('horn')->default(false);
            $table->boolean('seat_belts')->default(false);
            $table->boolean('car_jack')->default(false);
            $table->boolean('scratched')->default(false);
            $table->boolean('broken')->default(false);
            $table->boolean('dented')->default(false);
            $table->text('observation')->nullable();
            $table->text('inspection_files')->nullable();
            $table->foreignId('vehicle_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_inspections');
    }

};
