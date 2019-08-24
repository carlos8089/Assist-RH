<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->email,
        'password'=>$faker->password,
        'employe_id'=>rand(1,50)
    ];
});
