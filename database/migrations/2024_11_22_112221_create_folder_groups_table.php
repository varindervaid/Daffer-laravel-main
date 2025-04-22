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
        Schema::create('folder_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('folder_id');  // Folder ID
            $table->unsignedBigInteger('group_id');   // Group ID
            $table->timestamps();
            // Foreign keys for folder_id and group_id
            $table->foreign('folder_id')->references('id')->on('folders')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('folder_groups');
    }
};
