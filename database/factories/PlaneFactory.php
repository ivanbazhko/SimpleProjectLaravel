<!-- use App\Plane;
use Faker\Generator as Faker; -->

<?php

use App\Plane;
use Faker\Generator as Faker;

$factory->define(App\Plane::class, function (Faker $faker) {
    return [
        'name' => $faker->numberBetween(1, 10),
        'manufacture' => $faker->numberBetween(1, 25),
        'image' => $faker->unique()->sentence(1, 3),
        'price' => $faker->paragraph(),
        'capacity' => $faker->numberBetween(3, 868),
        'fuselage' => $faker->boolean(),
        'range' => $faker->numberBetween(500, 16000),
        'description' => $faker->unique()->sentence(1, 3),
    ];
});