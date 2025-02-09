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
        Schema::create('accredited_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accredited_id')->constrained();
            $table->text('description')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
            $table->text('working_days')->nullable();
            $table->text('accredited_photos')->nullable();
            $table->boolean('full_time')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accredited_locations');
    }

};
