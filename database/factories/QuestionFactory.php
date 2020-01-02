<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Question;
use Faker\Generator as Faker;
use App\Model\Category;
use App\User;

$factory->define(Question::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        'title'=>$title,
        'slug'=>Str::slug($title),
        'category_id'=>Category::all()->random(),
        'body' =>$faker->text(),
        'user_id'=>User::all()->random(),
    ];
});
