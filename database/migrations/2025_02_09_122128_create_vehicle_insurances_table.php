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
        Schema::create('vehicle_insurances', function (Blueprint $table) {
            $table->id();
            $table->string('insurance_number')->nullable();
            $table->float('insured_amount', 20)->nullable();
            $table->float('deductible_amount', 20)->nullable();
            $table->float('premium_amount', 20)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('insurer_name')->nullable();
            $table->string('document_number')->nullable();
            $table->text('document_files')->nullable();
            $table->date('redeemed_at')->nullable();
            $table->foreignId('vehicle_id')->constrained();
            $table->boolean('redeemed')->default(true);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_insurances');
    }

};
