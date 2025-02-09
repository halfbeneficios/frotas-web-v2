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
        Schema::create('platform_information', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj')->nullable();
            $table->string('business_name')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('city_register')->nullable();
            $table->string('state_register')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_fix')->nullable();
            $table->string('cnae')->nullable();
            $table->string('tax_regime')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('responsible_name')->nullable();
            $table->string('responsible_cpf')->nullable();
            $table->date('responsible_birth')->nullable();
            $table->string('responsible_email')->nullable();
            $table->string('responsible_phone')->nullable();
            $table->foreignId('address_id')->constrained();
            $table->text('observation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platform_information');
    }

};
