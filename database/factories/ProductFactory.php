<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' => $faker->randomFloat(2,100,1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(5,30)
    ];
});
