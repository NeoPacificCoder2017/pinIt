<?php

use Faker\Generator as Faker;

$factory->define(App\UserType::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1)
    ];
});
