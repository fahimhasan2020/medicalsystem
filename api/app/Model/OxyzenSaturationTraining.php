<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OxyzenSaturationTraining extends Model
{
    protected $fillable = ['saturation'];
    protected $table = "oxyzen_saturation_training";
}
