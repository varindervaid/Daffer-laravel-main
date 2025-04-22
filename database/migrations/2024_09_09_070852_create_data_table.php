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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('site');
            $table->date('install_date');
            $table->string('system_id');
            $table->text('data');                   // Data content
            $table->enum('status',['online','offline']);                   // Data content
            $table->unsignedBigInteger('created_by'); // Created by user
            $table->unsignedBigInteger('folder_id');  // Folder ID
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('folder_id')->references('id')->on('folders')->onDelete('cascade'); // Cascade delete when folder is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
