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
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image'); // Image URL or file path
            $table->text('address');
            $table->decimal('price', 10, 2); // Assuming price with two decimal places
            $table->integer('bed_count');
            $table->integer('bath_count');
            $table->integer('guest_count');
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade'); // Foreign key for the countries table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villas');
    }
};
