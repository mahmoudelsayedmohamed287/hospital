<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    protected $table = "doctors"; 
    public $timestamps = false;
   public $token = false;
}
