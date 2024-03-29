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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id('id_pembelian');
            $table->unsignedBigInteger('id_supplier');
            $table->integer('total_item');
            $table->integer('total_harga');
            $table->integer('diskon')->default(0);
            $table->integer('bayar')->default(0);
            $table->timestamps();

            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
