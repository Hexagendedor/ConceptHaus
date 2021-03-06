<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materia;
use Faker\Generator as Faker;

$factory->define(Materia::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(3),
        'activo' => 1
    ];
});
