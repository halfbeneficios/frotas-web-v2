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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('registration')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('expediter')->nullable();
            $table->date('birth')->nullable();
            $table->string('cnh')->nullable();
            $table->string('cnh_category')->nullable();
            $table->date('cnh_emission')->nullable();
            $table->date('cnh_expire')->nullable();
            $table->text('observation')->nullable();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('subsidiary_id')->constrained();
            $table->foreignId('cost_center_id')->constrained();
            $table->foreignId('address_id')->constrained();
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
        Schema::dropIfExists('drivers');
    }

};
