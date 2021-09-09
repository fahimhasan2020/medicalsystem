<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['user_id','reading_number','comments','parameters'];
    protected $table = "receipts";
}
