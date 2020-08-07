<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\notas;
use Faker\Generator as Faker;

$factory->define(notas::class, function (Faker $faker) {

    return [
        'documento' => $faker->randomDigitNotNull,
        'nombre' => $faker->word,
        'telefono' => $faker->word,
        'procedimiento' => $faker->word,
        'observaciones' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
