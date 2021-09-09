<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ecg extends Model
{
    protected $fillable = ['reading_number','user_id','bpm'];
    protected $table = "ecg";
}
