<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentarios;
use Faker\Generator as Faker;

$factory->define(Comentarios::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->text(20),
        'cuerpo'=>$faker->text(60),
        'publicacion_id'=>$faker->numberbetween(1,50),
    ];
});
