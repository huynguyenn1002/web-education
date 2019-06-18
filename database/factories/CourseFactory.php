<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Models\Course::class, function (Faker $faker) {
    return [
        //
        'name' => 'Course '. rand(1,10),
        'teacher_id' => rand(1,3),
        'category_id' => rand(1,3),
        'cost' => rand(1,10) * 100000,
        'status' => 1,
    ];
});
