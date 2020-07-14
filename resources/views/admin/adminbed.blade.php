@extends('admin.admintamplate')
@section('content')

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All beds</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>id</th>
                        <th>room_number</th>
                        <th>bed_number</th>
                        <th>Departments</th>
                        <th>image</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($beds as $bed)
                    <tr>
                        
                        <td>{{$bed->id}}</td>
                        <td>{{$bed->room_no}}</td>
                        <td>{{$bed->bed_no}}</td>
                        <td>{{$bed->department_name}}</td>
                        <td><img src="{{asset($bed->image)}}" alt="" width=" 100px" height =" 100px"></td>
                       
                        <td>
                            <a  href="{{asset('editbed')}}/{{$bed->id}}">Edit</a>  
                            <a  href="{{asset('deletebed')}}/{{$bed->id}}">Delete</a>
                            
                        </td>
                        
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
            <a class = "btn btn-primary" href="{{ asset('addadminbed')}}">Add new bed</a>
           

        </div>
    </div>
    
@endsection