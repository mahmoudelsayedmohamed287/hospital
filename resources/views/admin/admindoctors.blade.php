@extends('admin.admintamplate')
@section('content')

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All doctors</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>id</th>
                        <th>name</th>
                        <th>telephone</th>
                        <th>Address</th>
                        <th>exprince</th>
                        <th>department</th>
                        <th>image</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($doctors as $doctor)
                    <tr>
                        
                        <td>{{$doctor->id}}</td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->telephone}}</td>
                        <td>{{$doctor->address}}</td>
                        <td>{{$doctor->exprience}}</td>
                        <td>{{$doctor->department_name}}</td>
                        <td><img src="{{asset($doctor->image)}}" alt="" width=" 100px" height =" 100px"></td>
                       
                        <td>
                            <a  href="{{asset('editdoctors')}}/{{$doctor->id}}">Edit</a>  
                            <a  href="{{asset('deletedoctors')}}/{{$doctor->id}}">Delete</a>
                            
                        </td>
                        
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
            <a class = "btn btn-primary" href="{{ asset('addadmindoctors')}}">Add new doctors</a>
           

        </div>
    </div>
    
@endsection