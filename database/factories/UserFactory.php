<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Model;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Priana Saputra',
        'email' => 'priana.yhc@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('bismillah'),
        'remember_token' => Str::random(10),
    ];
});
