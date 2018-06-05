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

$factory->define(App\Models\fwdt::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});$factory->define(App\Models\gzjs::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});$factory->define(App\Models\lwwb::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});$factory->define(App\Models\lwpq::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});$factory->define(App\Models\rlzy::class, function (Faker $faker) {
    return [
        'author' => str_random(10),
        'view_num' => 5,
        'cover' => NULL, // secret
        'title' => str_random(10),
        'content' => str_random(20),
    ];
});
$factory->define(App\Models\zcfg::class, function (Faker $faker) {
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
