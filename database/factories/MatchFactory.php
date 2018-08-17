<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(\App\Models\Match::class, function (Faker $faker) {
    return [
        'date' => $faker->date(Carbon::today()),
        'user_id' =>  1,
        'participation' => true,
    ];
});