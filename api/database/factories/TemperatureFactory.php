<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\TemperatureTraining;
use Faker\Generator as Faker;

$factory->define(TemperatureTraining::class, function (Faker $faker) {
    return [
        'temperature'=>$faker->numberBetween(97,101)
    ];
});
