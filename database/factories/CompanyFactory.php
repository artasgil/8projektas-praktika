<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'title' => $faker->company(),
        'description' => $faker->sentence(10),
        'logo' => $faker->imageUrl(300, 300, "animals", true),
    ];
});
