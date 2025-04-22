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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_type_id')->nullable();
            $table->unsignedBigInteger('module_id')->nullable();
            $table->string('view_opt')->nullable();
            $table->string('add_opt')->nullable();
            $table->string('edit_opt')->nullable();
            $table->string('delete_opt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
