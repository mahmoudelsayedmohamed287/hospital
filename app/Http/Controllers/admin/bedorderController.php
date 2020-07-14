<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class bedorderController extends Controller
{
    public function index(){
     
        $orders =  DB::table('patients')
        ->join('departments', 'departments.id', '=', 'patients.department_id')
        ->join('beds', 'beds.id', '=', 'patients.bed_id')
        ->select('patients.*', 'beds.bed_no as bed_no','departments.name as department_name')
        ->get();
        return view("admin.adminbedorders")->with('orders',$orders);
}
}
