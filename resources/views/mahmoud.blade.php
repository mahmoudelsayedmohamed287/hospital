
@extends('Home.template')
@section('content')
<caption>All posts</caption>
<table border ="1">

    <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">content</th>
        <th scope="col">control</th>
    </tr>
@foreach($posts as $post)

   
    <tr>
        <th scope="col">{{$post->id}}</th>
        <th scope="col">{{$post->title}}</th>
        <th scope="col">{{$post->content}}</th>
        <th>
            <a href="post/{{$post->id}}">detail</a>
            <a href="delete/{{$post->id}}">delete</a>
       </th>
      

    </tr>

</table>

@endforeach
@endsection