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
        Schema::create('managers', function (Blueprint $table) {
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
            $table->float('min_approval', 20)->nullable();
            $table->float('max_approval', 20)->nullable();
            $table->string('profile_photo')->nullable();
            $table->text('observation')->nullable();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('manager_profile_id')->constrained();
            $table->foreignId('department_id')->constrained();
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
        Schema::dropIfExists('managers');
    }

};
