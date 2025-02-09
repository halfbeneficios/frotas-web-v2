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
        Schema::create('infractions', function (Blueprint $table) {
            $table->id();
            $table->string('ctb_article')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->float('value', 20)->nullable();
            $table->integer('point_reduction')->nullable();
            $table->string('infraction_gravity')->nullable();
            $table->foreignId('company_id')->constrained();
            $table->boolean('cnh_suspension')->default(false);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infractions');
    }

};
