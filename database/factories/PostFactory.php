<?php

use Faker\Generator as Faker;

//$factory->define(Model::class, function (Faker $faker) {
    $factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'users_id'   =>rand(1,30),
        'category_id'=>rend(1,20),
        'name'       =>$title,
        'slug'       =>str_slug($title),
        'body'       =>$faker->text(500),
    ];
});
