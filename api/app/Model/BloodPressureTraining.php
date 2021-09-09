<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BloodPressureTraining extends Model
{
    protected $fillable = ['sys','dias'];
    protected $table = "blood_pressure_training";
}
