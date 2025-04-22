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
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->string('name');                 // Folder name
            $table->unsignedBigInteger('created_by'); // Created by user
            $table->unsignedBigInteger('parent_id')->nullable(); // Parent folder, nullable for root folders
            $table->string('group_id')->nullable();  // Group ID
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('folders')->onDelete('cascade'); // Cascade delete for subfolders
            // $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');  // Cascade delete for group-related folders
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folders');
    }
};
