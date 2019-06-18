<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Models\Thematic::class, function (Faker $faker) {
    return [
        //
        'name' => 'Thematic '. rand(1,100),
        'course_id' => rand(1,10),
    ];
});
