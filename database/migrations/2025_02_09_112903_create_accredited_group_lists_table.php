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
        Schema::create('accredited_group_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accredited_group_id')->constrained();
            $table->foreignId('accredited_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accredited_group_lists');
    }

};
