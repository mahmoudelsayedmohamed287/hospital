@extends('admin.admintamplate')
@section('content')


<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All departments</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>image</th>
                        <th>control</th>
                        
                    </tr>
                  </thead>
                 <tbody>
                
                    @foreach($departments as $department)
                    <tr>
                        
                        <td>{{$department->id}}</td>
                        <td>{{$department->name}}</td>
                        <td>{{$department->description}}</td>
                        <td><img src="{{asset($department->image)}}" alt="" width=" 100px" height =" 100px"></td>
                       
                        <td>
                        <a  href="{{asset('editdepartments')}}/{{$department->id}}">Edit</a>  
                            <a  href="{{asset('deletedepartments')}}/{{$department->id}}">Delete</a>
                            
                        </td>
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
            <a class = "btn btn-primary" href="{{ asset('addadmindepartments')}}">Add new departments</a>
          
        </div>
    </div>
    
@endsection