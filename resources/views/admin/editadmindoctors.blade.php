@extends('admin.admintamplate')
@section('content')
<div class = "container">
<h1 class = "text-center"> edit doctor</h1>
<form id="formAddAdderss" action="{{ asset('updatedoctors')}}/{{$data['doctors']->id}}" method="post" enctype="multipart/form-data"> 
@csrf
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>name *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="name" type="text" class="form-control" value = "{{$data['doctors']->name}}">
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label>age *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="age" type="number" class="form-control" value = "{{$data['doctors']->age}}">
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label>telephone *</label>
            <div class="form-group label-floating is-empty">
                <input name="telephone" type="text" class="form-control" value = "{{$data['doctors']->telephone}}">
            </div>
        </div>


        <div class="col-md-12 col-xs-12">
            <label>  address *</label>
            <div class="form-group label-floating is-empty">
                <input name="address" type="text" class="form-control" value = "{{$data['doctors']->address}}">
            </div>
        </div>
        <div class="col-md-12 col-xs-12">
            <label>exprience *</label>
            <div class="form-group label-floating">
                    <input name="exprience"  type="number" class="form-control"  value = "{{$data['doctors']->exprience}}">
                </div>
                </div>

                
        <div class="col-md-12 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" >
            <img src="{{asset($data['doctors']->image)}}" alt="" width=" 100px" height =" 100px">
            </div>
            </div>
              
            <div class="col-md-12 col-xs-12">
        <label>departments *</label>
        <select id = "departments" name ="departments" style = "width:364px">
        
           <option value = "0">...</option>
           @foreach($data['departments'] as $department)
           <option value="{{$department->id}}"<?php if( $department->id == $data['doctors']->department_id ): ?> selected="selected"<?php endif; ?>><?php echo $department->name ?></option> 
          @endforeach         
        </select>
        </div>
        <br>
        <br>
            
        <div class="col-md-4 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                           update doctor  
                </button>
            </div>
        </div>
        </div>
        @csrf
        </form>
</div>
@endsection