<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departments;
use App\doctors;
use DB;

class homeController extends Controller
{
    public function index(){

        $departments = departments::all();
        $expertdoctors = DB::table('doctors')
        ->where('exprience','>' , 2)
        ->join('departments', 'departments.id', '=', 'doctors.department_id')
        ->select('doctors.*','departments.name as department_name')
        ->get();

   
        return view('Home.index')->with('data',['expertdoctors'=>$expertdoctors,'departments'=>$departments]); 
    }
}
