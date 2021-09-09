<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\EcgTraining;
use Faker\Generator as Faker;

$factory->define(EcgTraining::class, function (Faker $faker) {
    return [
        'bpm'=> $faker->numberBetween(120,220)
    ];
});
