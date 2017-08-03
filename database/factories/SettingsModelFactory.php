<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/**
 * 作業分類ダミーデータ
 * @var \Illuminate\Database\Eloquent\Factory */
$factory->define(App\Models\WorkType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

/*
 * 顧客ダミーデータ
 * @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'type_id' => 1,
    ];
});

/*
 * 勤務分類ダミーデータ
 * @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\JobType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'unit_betting_rate' => 1.22,
    ];
});

/*
 * 部門ダミーデータ
 * @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Department::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});


