<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        },
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'content' => $faker->paragraph,
    ];
});
