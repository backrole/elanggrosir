<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JenisProduk;
use App\ProdukMasuk;
use App\Supplier;
use Faker\Generator as Faker;

$factory->define(ProdukMasuk::class, function (Faker $faker) {
    return [
        'produk_id' => $faker->ean8,
        'nama_barang' => $faker->name,
        'stok_beli' => $faker->biasedNumberBetween($min = 10, $max = 200, $function = 'sqrt'),
        'stok_grosir' => $faker->biasedNumberBetween($min = 10, $max = 200, $function = 'sqrt'),
        'stok_retail' => $faker->biasedNumberBetween($min = 10, $max = 200, $function = 'sqrt'),
        'harga_grosir' => $faker->biasedNumberBetween($min = 10, $max = 200, $function = 'sqrt'),
        'harga_retail' => $faker->biasedNumberBetween($min = 10, $max = 200, $function = 'sqrt'),
        'harga_beli' => $faker->biasedNumberBetween($min = 10, $max = 200, $function = 'sqrt'),
        'isi_per_box' => $faker->biasedNumberBetween($min = 10, $max = 200, $function = 'sqrt'),
        'status_pembayaran' => $faker->name,
        'supplier_id' => factory(Supplier::class)->create(),
        'jenis_produk_id' => factory(JenisProduk::class)->create(),
    ];
});
