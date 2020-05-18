<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'email' => $faker->unique()->safeEmail(),
        'phone_number' => $faker->phoneNumber(),
        'guests' => $faker->numberBetween(1,4),
        'pet' => $faker->numberBetween(0,1),
        'breakfast' => $faker->boolean($chanceOfGettingTrue = 50),
        'room_id' => $faker->unique()->numberBetween(1,3),
        'check_in_date' => $faker->dateTimeBetween('now', '+3 days', $timezone = 'Europe/Madrid'),
        'check_out_date' => $faker->dateTimeBetween('now + 3 days', $max ="now + 8 days", $timezone = 'Europe/Madrid'),
    ];
});