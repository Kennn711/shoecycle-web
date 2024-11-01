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
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("driver_id")->nullable();
            $table->string("code");
            $table->string("proof_of_payment", 100);
            $table->decimal("total", 10, 2);
            $table->date("payment_date");
            $table->date("received_date")->nullable();
            $table->enum("transaction_status", ['pending', 'cancelled', 'completed', 'accepted'])->default('pending'); // Status Transaksi
            $table->enum("delivery_status", ['shipped', 'delivered', 'pending'])->nullable(); // Status Pengiriman
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
