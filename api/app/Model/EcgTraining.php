<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcgTraining extends Model
{
    protected $fillable = ["bpm"];
    protected $table = "ecg_training";
}
