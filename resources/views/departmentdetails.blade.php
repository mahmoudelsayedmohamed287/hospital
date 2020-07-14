
@extends('Home.template')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-m-6 col-xs-12">
<h2>this is the name of department::{{$departments->name}}</h2>
<h2>this is the description of department::{{$departments->description}}</h2>
<img src="{{asset($departments->image)}}" alt="">
</div>
</div>
</div>

@endsection
