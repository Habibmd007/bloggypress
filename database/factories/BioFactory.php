<?php

use Faker\Generator as Faker;

$factory->define(App\Bio::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'desig'=> $faker->title,
        'text'=> $faker->text,
        'status'=> 0,
        'img'=> 'images/default.jpg',
        
        
    ];
});
