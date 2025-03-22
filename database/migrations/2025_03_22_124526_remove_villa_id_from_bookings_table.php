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
        Schema::table('bookings', function (Blueprint $table) {
            // Drop the villa_id column directly if the foreign key is not present
            $table->dropColumn('villa_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // In case of rollback, re-add the villa_id column and foreign key constraint
            $table->foreignId('villa_id')->constrained('villas')->onDelete('cascade');
        });
    }
};
