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
        Schema::create('bills', function (Blueprint $table) {
            $table->string('id', 7)->primary();
            $table->string('admin_id', 4);
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('tenant_id', 4);
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            $table->date('billing_date');
            $table->decimal('remaining_bill', 10, 2);
            $table->date('due_date');
            $table->enum('status', ['Lunas', 'Cicil', 'Belum bayar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
