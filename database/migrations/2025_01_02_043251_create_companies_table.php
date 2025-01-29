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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj')->nullable();
            $table->string('business_name')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('inscription')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_fix')->nullable();
            $table->string('email')->unique()->nullable();
            $table->foreignId('address_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }

};
