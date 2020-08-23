<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Impresora;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Impresora::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'optional_string' => $faker->sentence,
        'email' => $faker->email,
        'updated_at' => $faker->dateTime,
        'created_at' => $faker->dateTime
    ];
});


