<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {

    // DB::table('users')->delete();
    
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Post::class, function(Faker $faker) {

    // DB::table('posts')->delete();

    $title = $faker->realText(10);
    $slug = str_slug($title, '-' );

    return [
        'user_id' => function() { return factory(App\User::class)->create()->id; },

        'title' => $title,
        'slug' => $slug,
        'content' => $faker->realText(300)
    ];
});
