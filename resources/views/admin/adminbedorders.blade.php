@extends('admin.admintamplate')
@section('content')


<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All beds_order</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>user</th>
                        <th>address</th>
                        <th>telephone</th>
                        <th>email</th>
                        <th>bed_no </th>
                        <th>department </th>
                        
                        
                    </tr>
                  </thead>
                 <tbody>
                
                    @foreach($orders as $order)
                    <tr>
                        
                        <td>{{$order->name  }}</td>
                        <td>{{$order->address }}</td>
                        <td>{{$order->telephone }}</td>
                        <td>{{$order->email }}</td>
                        <td>{{$order->bed_no }}</td>
                        <td>{{$order->department_name }}</td>
                        
                       
                       
                    </tr>
                    @endforeach
               
                
                </tbody>
            </table>
            
          
        </div>
    </div>
    
@endsection