<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jumlah_pembelian');
            $table->integer('satuan');
            $table->integer('total');
            $table->integer('potongan_manual');
            $table->integer('hutang')->nullable();
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_promo');
            $table->unsignedBigInteger('id_admin');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('produks');
            $table->foreign('id_promo')->references('id')->on('promos');
            $table->foreign('id_admin')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
