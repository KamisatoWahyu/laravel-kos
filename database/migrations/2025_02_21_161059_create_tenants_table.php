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
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id', 4)->primary();
            $table->string('room_id', 4);
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->string('name');
            $table->string('handphone_number');
            $table->string('address');
            $table->string('nik');
            $table->string('profile_photo')->nullable();
            $table->string('ktp_image')->nullable();
            $table->date('check_in_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
