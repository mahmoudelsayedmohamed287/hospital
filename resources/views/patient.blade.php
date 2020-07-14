@extends('Home.template')
@section('content')
<div class = "container">
<h1 class = "text-center"> make your bed</h1>
<form id="formAddAdderss" action="{{ asset('addpatient')}}" method="post" enctype="multipart/form-data">  
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>patient Name *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="name" type="text" class="form-control" required>
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label>Address *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="address" type="text" class="form-control" required>
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
        <label>  Phone number *</label>
        <div class="form-group label-floating is-empty">
         <input name="telephone" type="telephone" class="form-control" required>
         </div>
        </div>

        <div class="col-md-6 col-xs-12">
        <label>Beds*</label>
        <select id = "bed" name ="bed"style = "width:364px">
        
           <option value = "0">...</option>
           @foreach($data['beds'] as $bed)
            <option value ="{{$bed->id}}">{{$bed->bed_no}}</option> 
          @endforeach         
        </select>
        </div>


        <div class="col-md-6 col-xs-12">
        <label>departments *</label>
        <select id = "departments" name ="departments" style = "width:364px">
        
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


