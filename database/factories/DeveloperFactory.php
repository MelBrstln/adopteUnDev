<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\developer;
use Faker\Generator as Faker;

$factory->define(developer::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'firstName'=>$faker->firstName,
        'email'=>$faker->email,
        'phoneNumber'=>$faker->phoneNumber,
        'adresse'=>$faker->address,
        'postcode'=>$faker->postcode,
        'city'=>$faker->city,
        'resume'=>$faker->text,
//        'cv'=>$faker->
//        'picture'=>$faker->
        'jobInterest'=>$faker->jobTitle
    ];
});
