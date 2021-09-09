<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TemperatureTraining extends Model
{
    protected $fillable = ['temperature'];
    protected $table = "temperature_training";
}
