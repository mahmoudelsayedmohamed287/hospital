<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\post;

class postController extends Controller
{
    public function index(){
       $posts = post::all();
      
     return view('mahmoud')->with('posts',$posts);
    }



    public function show($id){

        // $post = post::find($id);
        // return view('edit')->with('post',$post);
        return view('doctors');
    }


    public function destroy($id){
        $post = post::find($id);
       $post->delete();
         
        
    }

    public function about(){

        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function departments(){
        return view('departments');
    }
    public function doctors(){
        return view('doctors');
    }
}
