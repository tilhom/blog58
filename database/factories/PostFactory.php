<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	return [
		'user_id' => $faker->numberBetween(1,2),
		'category_id' => $faker->numberBetween(1,10),
		'title' => $faker->sentence,
		'description' => $faker->sentence(20),
		'content' => $faker->text(1000),
		'cover_img' => basename($faker->image('storage/app/public/images', 750, 300)),
		'status' => 1,

	];
});
