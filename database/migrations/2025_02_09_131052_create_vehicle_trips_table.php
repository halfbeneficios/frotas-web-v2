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
        Schema::create('vehicle_trips', function (Blueprint $table) {
            $table->id();
            $table->string('registration')->unique()->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('itinerary')->nullable();
            $table->text('passengers')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->bigInteger('initial_city')->nullable();
            $table->bigInteger('final_city')->nullable();
            $table->integer('initial_km')->nullable();
            $table->integer('final_km')->nullable();
            $table->text('observation')->nullable();
            $table->text('attachment_files')->nullable();
            $table->foreignId('vehicle_id')->constrained();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('subsidiary_id')->constrained();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_trips');
    }

};
