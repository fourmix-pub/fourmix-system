<?php

use Faker\Generator as Faker;

$factory->define(App\Models\SafetyConfirmation::class, function (Faker $faker) {
    return [
        'mail_id' => 1,
        'user_id' => rand(1, 10),
        'confirmation' => rand(0, 1),
    ];
});
