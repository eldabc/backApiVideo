<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'descripcion' => $faker->paragraph(),
        'url_video' => $faker->url(),
    ];
});
