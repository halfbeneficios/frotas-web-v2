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
        Schema::create('vehicle_mileages', function (Blueprint $table) {
            $table->id();
            $table->integer('current_km')->nullable();
            $table->integer('new_km')->nullable();
            $table->text('reason')->nullable();
            $table->text('attachment_files')->nullable();
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
        Schema::dropIfExists('vehicle_mileages');
    }

};
