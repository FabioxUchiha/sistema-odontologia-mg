<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ingresos;
use Faker\Generator as Faker;

$factory->define(Ingresos::class, function (Faker $faker) {

    return [
        'fecha' => $faker->word,
        'servicio' => $faker->word,
        'detalle' => $faker->word,
        'tipo' => $faker->word,
        'precio' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
