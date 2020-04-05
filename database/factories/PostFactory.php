<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id'=> random_int(1,5),
        'category_id'=> random_int(1,5),
        'title' => $faker->realText(60),
        'content' => $faker->realText(),
    ];
});
