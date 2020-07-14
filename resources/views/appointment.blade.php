@extends('Home.template')
@section('content')
<div class = "container">
<h1 class = "text-center"> make your appointment</h1>
<form id="formAddAdderss" action="{{ asset('appointmentdetails')}}" method="post" enctype="multipart/form-data">  
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>Name *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="name" type="text" class="form-control" required>
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label>Age *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="age" type="number" class="form-control" required>
            </div>
           </div>

           <div class="col-md-12 col-xs-12">
            <label>Email *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="email" type="email" class="form-control" required>
            </div>
           </div>

        
        <div class="col-md-12 col-xs-12">
            <label>  Address *</label>
            <div class="form-group label-floating is-empty">
                <input name="address" type="text" class="form-control" required>
            </div>
            </div>

        <div class="col-md-6 col-xs-12">
        <label>Doctors*</label>
        <select id = "doctors" name ="doctors">
        
           <option value = "0">...</option>
           @foreach($data['doctors'] as $doctor)
            <option value ="{{$doctor->id}}">{{$doctor->name}}</option> 
          @endforeach         
        </select>
        </div>

        <div class="col-md-6 col-xs-12">
        <label>  Phone number *</label>
        <div class="form-group label-floating is-empty">
         <input name="phone" type="telephone" class="form-control" required>
         </div>
        </div>

        <div class="col-md-6 col-xs-12">
        <label>departments *</label>
        <select id = "departments" name ="departments">
        
           <option value = "0">...</option>
           @foreach($data['departments'] as $department)
            <option value ="{{$department->id}}">{{$department->name}}</option> 
          @endforeach         
        </select>
        </div>

        <div class="col-md-6 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                           Confirm  
                </button>
            </div>
        </div>
        </div>
        @csrf
        </form>
</div>
@endsection


