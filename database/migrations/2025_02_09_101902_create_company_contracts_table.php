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
        Schema::create('company_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('contract_number')->unique()->nullable();
            $table->string('description')->nullable();
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
            $table->float('contractual_limit', 20)->nullable();
            $table->float('contractual_discount', 20)->nullable();
            $table->integer('receipt_deadline')->nullable();
            $table->text('observation')->nullable();
            $table->text('contract_files')->nullable();
            $table->foreignId('company_id')->constrained();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_contracts');
    }

};
