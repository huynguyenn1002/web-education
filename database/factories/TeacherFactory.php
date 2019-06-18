<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Models\Teacher::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->phoneNumber,
        'address' => $faker->unique()->address,
        'academic' => rand(0,4),
    ];
});
