<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\company;
use Faker\Generator as Faker;

$factory->define(company::class, function (Faker $faker) {
    return [
//        'developer_id'=>$faker->numberBetween(1,5),
        'name'=>$faker->company,
        'email'=>$faker->companyEmail,
        'phoneNumber'=>$faker->phoneNumber,
        'represent'=>$faker->name
    ];
});
