@extends('admin.admintamplate')
@section('content')


<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All appointments</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>user</th>
                        <th>department</th>
                        <th>doctor</th>
                        <th>user_age</th>
                        <th>email </th>
                        <th>user_phone </th>
                        
                        
                    </tr>
                  </thead>
                 <tbody>
                
                    @foreach($appointments as $appointment)
                    <tr>
                        
                        <td>{{$appointment->user }}</td>
                        <td>{{$appointment->department_name}}</td>
                        <td>{{$appointment->doctor_name}}</td>
                        <td>{{$appointment->age}}</td>
                        <td>{{$appointment->email }}</td>
                        <td>{{$appointment->phone }}</td>
                        
                       
                       
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
            
          
        </div>
    </div>
    
@endsection