<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});
