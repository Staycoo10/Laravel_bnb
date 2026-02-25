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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); // FK la properties
            $table->string('guest_name'); // Numele oaspetelui
            $table->string('guest_email'); // Email oaspete
            $table->date('check_in'); // Data check-in
            $table->date('check_out'); // Data check-out
            $table->integer('guests'); // Număr oaspeți
            $table->decimal('total_price', 10, 2); // Preț total
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // Status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};