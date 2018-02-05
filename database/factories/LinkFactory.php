<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        'url'=> $faker->url,
        'title' => substr($faker->sentence(2), 0, -1),
        'user_id' => rand(2,50),
        'picture' => substr($faker->sentence(2), 0, -1),
        'category_id'=> rand(1,7)

    ];
});
