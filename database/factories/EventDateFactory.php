<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'date' => $faker->date('Y-m-d H:i'),
    ];
});
