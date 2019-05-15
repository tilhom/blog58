<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
		'user_id'=>$faker->numberBetween(1,10),
		'post_id'=>$faker->numberBetween(1,6),
		'parent_id'=>null,
		'content'=>$faker->paragraph,
		'status'=>1,
    ];
});
