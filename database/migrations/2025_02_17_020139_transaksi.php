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
        Schema::create('transaksi', function (Blueprint $table) 
        {
            $table->id();
            $table->unsignedBigInteger('idpesanan');
            $table->foreign('idpesanan')->references('id')->on('pesanan');
            $table->foreign('')->references('id')->on('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
