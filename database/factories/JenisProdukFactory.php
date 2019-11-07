<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JenisProduk;
use Faker\Generator as Faker;

$factory->define(JenisProduk::class, function (Faker $faker) {
    return [
        'jenis_barang' => $faker->name,
    ];
});
