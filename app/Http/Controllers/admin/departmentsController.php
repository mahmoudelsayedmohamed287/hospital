<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\departments;
use DB;

class departmentsController extends Controller
{
   public function index(){
       $departments = departments::all();
    
       return view("admin.admindepartments")->with('departments',$departments);
     
   }

   public function create(){
    return view('admin.addadmindepartments');
}

public function add(Request $request){
    
    $image = $_FILES['mainimg']['name'];
    $target = 'frontEnd/img/'.basename($_FILES['mainimg']['name']);
    $departments = new departments;
    $departments->name = $request->name;
    $departments->description = $request->description;
    $departments->image = $target;
    $departments->save();
    move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

    return redirect('viewadmindepartments');
    }
  




public function edit($id){

    $departments = departments::find($id);
    return view('admin.editadmindepartments')->with('departments',$departments);

}


public function update(Request $request,$id){
    $departments = departments::find($id);

if(!empty($_FILES['mainimg']['name'])){
    $image = $_FILES['mainimg']['name'];
    $target = 'frontEnd/img/'.basename($_FILES['mainimg']['name']);
    $departments->name = $request->name;
    $departments->description = $request->description;
    $departments->image = $target; 
    $departments->update();

    move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

    return redirect('viewadmindepartments');

}else{

    $departments->name = $request->name;
    $departments->description = $request->description;
    
    $departments->update();
    
    return redirect('viewadmindepartments');
}



}

public function delete($id){
    $departments = departments::find($id);
    $departments->delete();
    return redirect('viewadmindepartments');
}
}
