<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserRole;
use Faker\Generator as Faker;

$factory->define(UserRole::class, function (Faker $faker) {
    $i = 1;
    return [
        'role' => $i,
    ];
    $i++;
});
