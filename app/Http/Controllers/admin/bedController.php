<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\beds;
use App\departments;
use DB;

class bedController extends Controller
{
    public function create(){
        $departments = departments::all();
        return view('admin.addadminbed')->with('departments',$departments);
    }


    public function index(){
        $beds =  DB::table('beds')
        ->join('departments', 'departments.id', '=', 'beds.department_id')
        ->select('beds.*', 'departments.name as department_name')
        ->get();
     
        return view("admin.adminbed")->with('beds',$beds);
      
    }


    public function add(Request $request){
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/img/'.basename($_FILES['mainimg']['name']);
        $beds = new beds;
        $beds->room_no = $request->room;
        $beds->bed_no = $request->bed;
        $beds->department_id = $request->departments;
        $beds->image = $target;
        $beds->save();
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);

        return redirect('viewadminbeds');


    }
    public function edit($id){ 
        $departments = departments::all();
      $beds = beds::find($id);
     return view('admin.editadminbed')->with('data',['beds' => $beds, 'departments' => $departments]);
       


    }

    public function update(Request $request,$id){
      
        $beds = beds::find($id);
     if(!empty($_FILES['mainimg']['name'])){

        
        $image = $_FILES['mainimg']['name'];
        $target = 'frontEnd/img/'.basename($_FILES['mainimg']['name']);
        $beds->room_no = $request->room;
        $beds->bed_no = $request->bed;
        $beds->department_id = $request->departments;
        $beds->image = $target;
          
        $beds->update();
    
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
    
        return redirect('viewadminbeds');
     }else{

        $beds->room_no = $request->room;
        $beds->bed_no = $request->bed;
        $beds->department_id = $request->departments;
        $beds->update();
        return redirect('viewadminbeds');

     }

    }

    public function delete($id){
        $beds = beds::find($id);
        $beds->delete();
        return redirect('viewadminbeds');

    }
}
