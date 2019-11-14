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
                $table->unsignedBigInteger('supplier_id');
                $table->unsignedBigInteger('jenis_produk_id');
                $table->bigInteger('produk_id');
                $table->string('nama_barang');
                $table->integer('stok_beli');
                $table->integer('stok_grosir');
                $table->integer('stok_retail');
                $table->integer('harga_grosir');
                $table->integer('harga_retail');
                $table->integer('harga_beli');
                $table->integer('isi_per_box');
                $table->string('status_pembayaran');
                $table->timestamps();

                $table->foreign('supplier_id')->references('id')->on('suppliers');
                $table->foreign('jenis_produk_id')->references('id')->on('jenis_produks');
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
