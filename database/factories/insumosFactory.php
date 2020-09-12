<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\insumos;
use Faker\Generator as Faker;

$factory->define(insumos::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'fecha_de_compra' => $faker->word,
        'cantidad' => $faker->randomDigitNotNull,
        'marca' => $faker->word,
        'fecha_de_vencimiento' => $faker->word,
        'presentacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
