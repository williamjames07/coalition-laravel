<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
	return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(2, 100, true),
    ];
});
