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
        Schema::create('vehicle_documents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('document_number')->nullable();
            $table->date('expire_at')->nullable();
            $table->text('observation')->nullable();
            $table->text('document_files')->nullable();
            $table->foreignId('vehicle_id')->constrained();
            $table->foreignId('state_id')->constrained();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_documents');
    }

};
