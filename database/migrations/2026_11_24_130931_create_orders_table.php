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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('nomor_meja');
            $table->string('nama_pelanggan');
            $table->integer('total_harga')->default(0);
            $table->enum('status', ['pending', 'dimasak', 'selesai', 'batal'])->default('pending');
            $table->enum('metode_pembayaran', ['tunai', 'qris', 'debit'])->default('tunai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};