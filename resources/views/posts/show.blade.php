@extends('layouts.app')

@section('content')
  <a href="../posts" class="btn btn-default">Go Back</a>
  <h3>{{$post->title}}</h3>
  <div>
    {{$post->body}}
  </div>
  <hr>
  <small>Posted on {{$post->created_at}}</small>
  <hr>
  {{-- edit --}}
  <a href="../posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

  {{-- delete --}}
  {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
     {{Form::hidden('_method', 'DELETE')}}
     {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
 {!!Form::close()!!}
@endsection
