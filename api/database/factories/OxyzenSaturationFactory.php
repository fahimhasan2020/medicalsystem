<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\OxyzenSaturationTraining;
use Faker\Generator as Faker;

$factory->define(OxyzenSaturationTraining::class, function (Faker $faker) {
    return [
        'saturation'=>$faker->numberBetween(89,99)
    ];
});
