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
        Schema::create('rooms', function (Blueprint $table) {
            $table->string('id',4)->primary(); // Custom ID sebagai primary key
            $table->string('room_number', 3);
            $table->enum('room_type', ['Kosongan', 'Furniture'])->default('Kosongan');
            $table->string('room_facility');
            $table->decimal('price',10,2); // Harga tidak boleh negatif
            $table->enum('status', ['Ada', 'Terisi', 'Perbaikan'])->default('Ada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
