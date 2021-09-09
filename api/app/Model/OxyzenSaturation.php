<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OxyzenSaturation extends Model
{
    protected $fillable = ['user_id','reading_number','saturation'];
    protected $table = "oxyzen_saturation";
}
