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
        Schema::create('data_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_id')->constrained()->onDelete('cascade'); // Reference to `data` table
            $table->string('image_path'); // Path to store image location
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_images');
    }
};
