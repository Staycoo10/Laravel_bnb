
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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Numele proprietății
            $table->string('location'); // Locația (oraș)
            $table->text('description'); // Descriere
            $table->decimal('price', 8, 2); // Preț per noapte (ex: 99999.99)
            $table->string('type'); // Tip (Apartament, Vilă, etc)
            $table->integer('rooms')->default(1); // Număr camere
            $table->boolean('available')->default(true); // Disponibilă sau nu
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};