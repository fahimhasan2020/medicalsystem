<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sugar extends Model
{
    protected $fillable = ["reading_number",'user_id','sugar'];
    protected $table = "sugar";
}
