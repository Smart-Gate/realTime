<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Like;
use Faker\Generator as Faker;
use App\User;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'user_id'=>User::all()->random(),
    ];
});
