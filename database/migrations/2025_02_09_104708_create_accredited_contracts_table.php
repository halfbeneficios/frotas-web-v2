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
        Schema::create('accredited_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('contract_number')->unique()->nullable();
            $table->string('description')->nullable();
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
            $table->float('fee_tax', 20)->nullable();
            $table->integer('payment_deadline')->nullable();
            $table->text('observation')->nullable();
            $table->text('contract_files')->nullable();
            $table->foreignId('accredited_id')->constrained();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accredited_contracts');
    }

};
