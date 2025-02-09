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
        Schema::create('vehicle_infractions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->text('description')->nullable();
            $table->date('infraction_date')->nullable();
            $table->date('emission_date')->nullable();
            $table->date('due_date')->nullable();
            $table->date('payment_date')->nullable();
            $table->float('value', 20)->nullable();
            $table->foreignId('infraction_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('address_id')->constrained();
            $table->foreignId('cost_center_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_infractions');
    }

};
