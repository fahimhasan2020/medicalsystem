<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $fillable = ['temperature','user_id','reading_number'];
    protected $table = "temperature";
}
