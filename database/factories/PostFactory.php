<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [  

    'title' => $faker->sentence(5),
    'slug' =>$faker->sentence(3),
    'category_id' => 1,
    'desc' => $faker->sentence(1000),
    'status' =>'Draft'
       
    ];
});



