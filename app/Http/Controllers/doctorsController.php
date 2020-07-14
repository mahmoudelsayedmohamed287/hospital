<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctors;

class doctorsController extends Controller
{
   public function allDoctors(){
       $doctors = doctors::all();
      
       return view('doctors')->with('doctors',$doctors);
   }


}
