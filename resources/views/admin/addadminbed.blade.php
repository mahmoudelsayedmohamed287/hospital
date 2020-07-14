@extends('admin.admintamplate')
@section('content')
<div class = "container">
<h1 class = "text-center"> Add new bed</h1>
<form id="formAddAdderss" action="{{ asset('addbed')}}" method="post" enctype="multipart/form-data">  
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>room number *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="room" type="number" class="form-control" required>
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label>bed number *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="bed" type="number" class="form-control" required>
            </div>
        </div>

         <div class="col-md-6 col-xs-12">
        <label>departments *</label>
        <select id = "departments" name ="departments">
        
           <option value = "0">...</option>
           @foreach($departments as $department)
            <option value ="{{$department->id}}">{{$department->name}}</option> 
          @endforeach         
        </select>
       
        </div>

                <div class="col-md-12 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" required>
            </div>
            </div>
            
        <div class="col-md-4 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            Add New bed  
                </button>
            </div>
        </div>
        </div>
        @csrf
        </form>
</div>
@endsection


