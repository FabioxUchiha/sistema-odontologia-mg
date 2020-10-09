<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DesplegableServicioIngreso;
use Faker\Generator as Faker;

$factory->define(DesplegableServicioIngreso::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
