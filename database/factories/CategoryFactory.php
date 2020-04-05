<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $category=$faker->unique()->name;
    $slug=Str::slug($category);
    return [
        'name'   => $category,
        'slug'   => $slug,
    ];
});