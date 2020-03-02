<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'ap_paterno' => $faker->name,
        'ap_materno' => $faker->name,
        'activo' => 1
    ];
});
