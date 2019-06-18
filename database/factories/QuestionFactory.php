<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Models\Question::class, function (Faker $faker) {
    return [
        //
        'level' => rand(1,3),
        'answer_A' => 'A',
        'answer_B' => 'B',
        'answer_C' => 'C',
        'answer_D' => 'D',
        'answer_correct' => rand(1,4),
        'thematic_id' =>rand(1,10),
        'question' => 'Question' .rand(1,1000),
    ];
});
