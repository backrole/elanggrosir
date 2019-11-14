<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'nama_supplier' => $faker->name,
        'alamat' => $faker->city,
        'email' => $faker->safeEmail,
        'telp' => $faker->phoneNumber,
        'nama_sales' => $faker->name,
    ];
});
