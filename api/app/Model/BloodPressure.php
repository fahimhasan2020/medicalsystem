<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BloodPressure extends Model
{
    protected $fillable = ['user_id','reading_number','sys','dias'];
    protected $table = "blood_pressure";
}
