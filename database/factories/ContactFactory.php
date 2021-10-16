<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use App\Company;

use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'title' => $faker->name(),
        'phone' => $faker->phoneNumber(),
        'address' => $faker->address(),
        'email' => $faker->email(),
        'country' => $faker->country(),
        'city' => $faker->city()
    ];
});
