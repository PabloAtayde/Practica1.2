<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publicaciones;
use Faker\Generator as Faker;

$factory->define(Publicaciones::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->text(20),
        'cuerpo'=>$faker->text(60),
        'persona_id'=>$faker->numberbetween(1,10),
    ];
});
