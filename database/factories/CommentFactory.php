<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Post;
use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => function() {
            return Post::all()->random();
        },
        'author' => $faker->name,
        'comment' => $faker->sentence,
        'vote' => $faker->numberBetween(0,1)
    ];
});
