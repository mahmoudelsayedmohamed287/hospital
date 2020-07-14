<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctors;
use App\departments;
use DB;

class aboutController extends Controller
{
    
    public function index(){
       
        
        return view('about');

    }
  


    
}
