<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\appointment;
use DB;
class appointmentsController extends Controller
{
    public function index(){
     
        $appointments =  DB::table('appointments')
        ->join('departments', 'departments.id', '=', 'appointments.department_id')
        ->join('doctors', 'doctors.id', '=', 'appointments.doctor_id')
        ->select('appointments.*', 'departments.name as department_name','doctors.name as doctor_name')
        ->get();
        return view("admin.adminappointments")->with('appointments',$appointments);
}
}
