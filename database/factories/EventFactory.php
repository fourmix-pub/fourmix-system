<?php

use Faker\Factory as Faker;

$faker = Faker::create('ja_JP');

$factory->define(App\Models\Event::class, function() use ($faker) {

    return [
        'title' => $faker->text(25),
        'contents' => $faker->realText(20, 5),
        'user_id' => 1,
        'location' => $faker->realText(20, 5),
    ];

});
