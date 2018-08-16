<?php

use Faker\Generator as Faker;

$factory->define(App\Models\SafetyConfirmation::class, function () {
    return [
        'mail_id' => rand(1, 10),
        'user_id' => rand(1, 10),
        'is_confirmed' => rand(0, 1),
    ];
});
