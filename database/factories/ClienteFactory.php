<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'direccion' => $faker->address,
        'telefono' => $faker->tollFreePhoneNumber,
    ];
});

