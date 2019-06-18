<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Models\Category::class, function (Faker $faker) {
    return [
        //
        'name' => 'Category '. rand(1,10),

    ];
});
