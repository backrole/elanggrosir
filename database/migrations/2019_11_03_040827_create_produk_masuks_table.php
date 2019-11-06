<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'produk_masuks',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('id_barang');
                $table->string('nama_barang');
                $table->integer('stok_beli');
                $table->integer('stock_grosir');
                $table->integer('stock_retail');
                $table->integer('harga_grosir');
                $table->integer('harga_retail');
                $table->integer('isi_per_box');
                $table->string('status_pembayaran');
                $table->unsignedBigInteger('id_supplier');
                $table->unsignedBigInteger('id_jenis_produk');
                $table->timestamps();

                $table->foreign('id_supplier')->references('id')->on('suppliers');
                $table->foreign('id_jenis_produk')->references('id')->on('jenis_produks');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_masuks');
    }
}
