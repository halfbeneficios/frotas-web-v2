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
        Schema::create('accrediteds', function (Blueprint $table) {
            $table->id();
            $table->string('registration')->unique()->nullable();
            $table->string('cnpj')->unique()->nullable();
            $table->string('business_name')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('city_register')->nullable();
            $table->string('state_register')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_fix')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('logo_path')->nullable();
            $table->foreignId('address_id')->constrained();
            $table->foreignId('accredited_responsible_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accrediteds');
    }

};
