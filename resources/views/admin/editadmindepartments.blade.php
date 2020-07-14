@extends('admin.admintamplate')
@section('content')
<div class = "container">
<h1 class = "text-center"> edit doctor</h1>
<form id="formAddAdderss" action="{{ asset('updatedepartments')}}/{{$departments->id}}" method="post" enctype="multipart/form-data"> 
@csrf
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <label>name *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="name" type="text" class="form-control" value = "{{$departments->name}}">
            </div>
        </div>

        <div class="col-md-12 col-xs-12">
            <label>description *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="description" type="text" class="form-control" value = "{{$departments->description}}">
            </div>
        </div>

        
        <div class="col-md-12 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg">
            <img src="{{asset($departments->image)}}" alt="" width=" 100px" height =" 100px">
            </div>
            </div>

      
                
            
        <div class="col-md-4 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                           update department  
                </button>
            </div>
        </div>
        </div>
        @csrf
        </form>
</div>
@endsection