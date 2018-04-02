<?php

use Faker\Generator as Faker;

$factory->define(App\Food::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->paragraph,
        'price' => $faker->randomNumber(5),
        'type' => $faker->randomElement(['halal', 'nonhalal'])
    ];
});
