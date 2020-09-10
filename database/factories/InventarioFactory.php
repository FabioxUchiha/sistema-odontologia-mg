<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Inventario;
use Faker\Generator as Faker;

$factory->define(Inventario::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'categoria' => $faker->word,
        'marca' => $faker->word,
        'cantidad' => $faker->randomDigitNotNull,
        'unidad_medica' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
