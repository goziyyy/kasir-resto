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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idmenu');
            $table->foreign('idmenu')->references('id')->on('menu');
            $table->unsignedBigInteger('idpelanggan');
            $table->foreign('idpelanggan')->references('id')->on('pelanggan');
            $table->integer('jumlah');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('id')->on('user');
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
