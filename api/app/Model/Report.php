<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['user_id','parameters','reading_number','comments'];
    protected $table = 'reports';
}
