<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->randomLetter.$faker->randomLetter,
        'zip_code' => $faker->postcode,
    ];
});
