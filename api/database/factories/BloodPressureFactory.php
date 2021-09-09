<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\BloodPressureTraining;
use Faker\Generator as Faker;

$factory->define(BloodPressureTraining::class, function (Faker $faker) {
    return [
        'sys'=>$faker->numberBetween(90,120),
        'dias'=>$faker->numberBetween(120,140)
    ];
});
