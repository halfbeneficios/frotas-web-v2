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
        Schema::create('company_contract_limits', function (Blueprint $table) {
            $table->id();
            $table->date('period_start')->nullable();
            $table->date('period_finish')->nullable();
            $table->float('period_limit', 20)->nullable();
            $table->float('remaining_limit', 20)->nullable();
            $table->float('spent_limit', 20)->nullable();
            $table->foreignId('company_contract_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_contract_limits');
    }

};
