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
        Schema::table('data', function (Blueprint $table) {
            Schema::table('data', function (Blueprint $table) {
                $table->string('file_name')->after('id')->nullable(); // Add file_name column after id
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data', function (Blueprint $table) {
            Schema::table('data', function (Blueprint $table) {
                $table->dropColumn('file_name');
            });
        });
    }
};
