@extends('admin.admintamplate')
@section('content')
<div class = "container">
<h1 class = "text-center"> edit doctor</h1>
<form id="formAddAdderss" action="{{ asset('updatebed')}}/{{$data['beds']->id}}" method="post" enctype="multipart/form-data"> 
@csrf
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>room number *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="room" type="text" class="form-control" value = "{{$data['beds']->room_no}}">
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label>bed number *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="bed" type="number" class="form-control" value = "{{$data['beds']->bed_no}}">
            </div>
        </div>
   
        <div class="col-md-12 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" >
            <img src="{{asset($data['beds']->image)}}" alt="" width=" 100px" height =" 100px">
            </div>
            </div>
              
        <div class="col-md-12 col-xs-12">
        <label>departments *</label>
        <select id = "departments" name ="departments" style = "width:364px">
        
           <option value = "0">...</option>
           @foreach($data['departments'] as $department)
           <option value="{{$department->id}}"<?php if( $department->id == $data['beds']->department_id ): ?> selected="selected"<?php endif; ?>><?php echo $department->name ?></option> 
          @endforeach         
        </select>
        </div>
        <br>
        <br>
            
        <div class="col-md-4 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                           update bed  
                </button>
            </div>
        </div>
        </div>
        @csrf
        </form>
</div>
@endsection