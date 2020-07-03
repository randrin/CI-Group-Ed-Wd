<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
        'username' => $faker->unique()->userName,
        'name' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'status_user' => $faker->boolean,
        'phone' => $faker->phoneNumber,
        'sex' => $faker->randomElement($array = array('male', 'female')),
        'avatar' => $faker->imageUrl($width = 400, $height = 400),
        'avatarcover' => $faker->imageUrl,
        'password' => bcrypt('0000000'),
        'remember_token' => Str::random(10),
    ];
});
