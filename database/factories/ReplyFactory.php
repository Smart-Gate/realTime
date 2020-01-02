<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Reply;
use App\Model\Question;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' =>$faker->text(),
        'question_id'=> Question::all()->random(),
        'user_id'=> User::all()->random(),

    ];
});
