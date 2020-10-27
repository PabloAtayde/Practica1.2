<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usuarios;
use Faker\Generator as Faker;

$factory->define(Usuarios::class, function (Faker $faker) {
    return [
        'nickname'=>$faker->name,
        'password'=>$faker->password(1,10),
        'email'=>$faker->unique()->safeEmail(),
        'persona_id'=>$faker->numberbetween(1,10),
        'email_verified_at'=>now()
    ];
});
