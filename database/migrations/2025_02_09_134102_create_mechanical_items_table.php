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
        Schema::create('mechanical_items', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->string('original_code')->nullable();
            $table->string('name')->nullable();
            $table->text('observation')->nullable();
            $table->float('base_value', 20)->default(0)->nullable();
            $table->string('measurement_unity')->nullable();
            $table->string('description_type')->nullable();
            $table->string('description_group')->nullable();
            $table->string('mechanical_item_group')->nullable();
            $table->string('mechanical_item_type')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanical_items');
    }

};
