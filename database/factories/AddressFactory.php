<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Address;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {

    return [
        'user_id'   => factory(User::class),
        'province'  => $faker->state,
        'city'      => $faker->city,
        'street'    => $faker->streetName,
        'post_code' => $faker->postcode,
    ];
});
