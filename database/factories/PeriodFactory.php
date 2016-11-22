<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Acacha\Periods\Period::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});