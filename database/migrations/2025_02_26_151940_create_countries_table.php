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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // Image URL or file path
            $table->string('name');
            $table->string('language_spoke');
            $table->string('capital');
            $table->string('currency');
            $table->text('visa_requirements');
            $table->decimal('area', 15, 2); // Assuming area in square kilometers
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
