<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'user_id' => rand(2,20),
        'title' => substr($faker->sentence(2), 0, -1)
    ];
});
