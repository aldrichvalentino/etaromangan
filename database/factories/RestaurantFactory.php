<?php

use Faker\Generator as Faker;

$factory->define(App\Restaurant::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'name' => $faker->name,
        'password' => 'resto',
        'phone' => $faker->phoneNumber,
        'address'=> $faker->address
    ];
});
