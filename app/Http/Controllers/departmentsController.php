<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departments;
use App\doctors;
use DB;
class departmentsController extends Controller
{
  
    public function departments(){

        $departments = departments::all();
        $doctors = DB::table('doctors')
        ->where('exprience','>' , 2)
        ->join('departments', 'departments.id', '=', 'doctors.department_id')
        ->select('doctors.*','departments.name as department_name')
        ->get();

   
        return view('departments')->with('data',['doctors'=>$doctors,'departments'=>$departments]); 
    }
}
