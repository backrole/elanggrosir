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
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('promo_id');
            $table->unsignedBigInteger('admin_id');
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('produks');
            $table->foreign('promo_id')->references('id')->on('promos');
            $table->foreign('admin_id')->references('id')->on('users');
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
