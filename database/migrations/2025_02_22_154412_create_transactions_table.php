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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id()->primary(); // Primary Key
            $table->string('bill_id', 7);
            $table->foreign('bill_id')->references('id')->on('bills')->onDelete('cascade');
            $table->datetime('transaction_time');
            $table->enum('transaction_status', ['paid', 'unpaid', 'pending']);
            $table->decimal('amount_paid', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
