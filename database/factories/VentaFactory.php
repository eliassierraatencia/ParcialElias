<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Venta::class, function (Faker $faker) {
    return [
        "producto" => [
            "nombre" => $faker->name,
            "descripcion" => $faker->paragraph,
            "precio" => $faker->numberBetween($min = 1000, $max = 9000)
        ],
        'vendedor' => $faker->name,
        'cantidad' => $faker->randomDigitNotNull,
        'factura_id' => function () {
            return factory(App\Models\Factura::class)->create()->id;
        }
    ];
});
