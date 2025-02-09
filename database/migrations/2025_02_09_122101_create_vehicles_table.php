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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('registration')->unique()->nullable();
            $table->string('card_number')->unique()->nullable();
            $table->string('serial_number')->nullable();
            $table->string('plate')->nullable();
            $table->string('producer')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('chassi')->nullable();
            $table->string('renavam')->nullable();
            $table->integer('km')->nullable();
            $table->string('color')->nullable();
            $table->string('motor')->nullable();
            $table->string('aro')->nullable();
            $table->integer('tank_capacity')->nullable();
            $table->string('lotation')->nullable();
            $table->string('prefix')->nullable();
            $table->string('fleet_size')->nullable();
            $table->string('performance_type')->nullable();
            $table->string('type_vehicle')->nullable();
            $table->string('vehicle_situation')->nullable();
            $table->text('observation')->nullable();
            $table->text('vehicle_files')->nullable();
            $table->foreignId('fleet_type_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('subsidiary_id')->constrained();
            $table->foreignId('cost_center_id')->constrained();
            $table->foreignId('result_center_id')->constrained();
            $table->foreignId('state_id')->constrained();
            $table->string('active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }

};
