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

$factory->define(App\Models\zxzx::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});$factory->define(App\Models\qyzp::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});$factory->define(App\Models\qyzz::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});$factory->define(App\Models\fwxm::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});$factory->define(App\Models\jdal::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});
$factory->define(App\Models\dqjs::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});
$factory->define(App\Models\zpxx::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});
