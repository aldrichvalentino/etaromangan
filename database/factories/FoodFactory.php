<?php

use Faker\Generator as Faker;

$factory->define(App\Food::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'price' => $faker->randomNumber(5),
        'type' => $faker->randomElement(['halal', 'nonhalal'])
    ];
});
