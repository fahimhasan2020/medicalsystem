<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TesterPatient extends Model
{
    protected $fillable = ['user_id','tester_id'];
    protected $table = "tester_patients";
}
