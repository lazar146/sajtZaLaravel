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
        Schema::create('model_specifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->references('id')->on('models');
            $table->foreignId('camera_id')->references('id')->on('camera_specs');
            $table->foreignId('memory_id')->references('id')->on('memory_specs');
            $table->foreignId('ram_id')->references('id')->on('ram_specs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_specifications');
    }
};
