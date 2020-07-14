<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\departments;
use App\doctors;
use DB;

class doctorsController extends Controller
{
  


    public function index(){
        $doctors =  DB::table('doctors')
        ->join('departments', 'departments.id', '=', 'doctors.department_id')
        ->select('doctors.*', 'departments.name as department_name')
        ->get();
     
        return view("admin.admindoctors")->with('doctors',$doctors);
      
    }
    public function create(){
        $departments = departments::all();
        return view('admin.addadmindoctors')->with('departments',$departments);
    }

    public function add(Request $request){
    
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/img/'.basename($_FILES['mainimg']['name']);
        $doctors = new doctors;
        $doctors->name = $request->name;
        $doctors->age  = $request->age;
        $doctors->exprience = $request->exprience;
        $doctors->telephone = $request->telephone;
        $doctors->address  = $request->address;
        $doctors->department_id = $request->departments;
        $doctors->image = $target;
        $doctors->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
        
    
        return redirect('viewadmindoctors');
        }

        public function edit($id){

            $doctors = doctors::find($id);
            $departments = departments::all();
            return view('admin.editadmindoctors')->with('data',['doctors'=>$doctors,'departments'=>$departments]);
        
        }

        public function update(Request $request,$id){
            $doctors = doctors::find($id);
        
        if(!empty($_FILES['mainimg']['name'])){
            $image = $_FILES['mainimg']['name'];
            $target = 'frontEnd/img/'.basename($_FILES['mainimg']['name']);
            $doctors->name = $request->name;
            $doctors->age  = $request->age;
            $doctors->exprience = $request->exprience;
            $doctors->telephone = $request->telephone;
            $doctors->address  = $request->address;
            $doctors->department_id = $request->departments;
            $doctors->image = $target; 
            $doctors->update();
        
            move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
        
            return redirect('viewadmindoctors');
        
        }else{
        
            $doctors->name = $request->name;
            $doctors->age  = $request->age;
            $doctors->exprience = $request->exprience;
            $doctors->telephone = $request->telephone;
            $doctors->address  = $request->address;
            $doctors->department_id = $request->departments;
            
            $doctors->update();
            
            return redirect('viewadmindoctors');
        }

        }

        public function delete($id){
            $doctors = doctors::find($id);
            $doctors->delete();
            return redirect('viewadmindoctors');
        }
}
