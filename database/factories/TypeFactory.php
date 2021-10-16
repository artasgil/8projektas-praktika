<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use App\Type;
use Faker\Generator as Faker;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'description' => $faker->sentence(10),
        'company_id'=>factory(Company::class)->create()->id
    ];
});
