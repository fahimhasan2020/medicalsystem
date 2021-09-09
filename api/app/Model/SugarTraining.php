<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SugarTraining extends Model
{
    protected $fillable = ['sugar'];
    protected $table = "sugar_training";
}