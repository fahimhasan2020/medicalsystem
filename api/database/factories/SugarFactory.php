<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\SugarTraining;
use Faker\Generator as Faker;

$factory->define(SugarTraining::class, function (Faker $faker) {
    return [
        'sugar'=>$faker->numberBetween(130,199)
    ];
});
