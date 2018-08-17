<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' =>rand(1, 20),
        'date_id' => rand(1, 15),
        'participation' => rand(1, 3),
    ];
});
