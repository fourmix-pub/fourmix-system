<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\SafetyMail::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'title' => $faker->text(20),
        'contents' => $faker->realText(200, 5),
    ];
});

