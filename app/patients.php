<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $table = "patients"; 
    public $timestamps = false;
   public $token = false;
}
