<?php

use Faker\Generator as Faker;

$factory->define(App\Song::class, function (Faker $faker) {
    return [
    	'user_id' => factory('App\User')->create()->id,
        'title' => $faker->sentence(3),
        'artist' => $faker->name,
        'lyrics' => $faker->sentence(80),
    ];
});
