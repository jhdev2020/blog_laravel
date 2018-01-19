<?php

use Faker\Generator as Faker;
//definir el modelo con el que vamos a trabajar
//$factory->define(Model::class, function (Faker $faker) {
$factory->define(App\Category::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'name'=>$title,
        'slug'=>str_slug($title),
        'body'=>$faker->text(500),
    ];
});