@extends('layouts.app')

@section('content')
  <h3>Edit Post</h3>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
  <div class="form-group ">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', ['class' =>'form-control', 'placeholder'=>'Title'])}}
  </div>
  <div class="form-group ">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $post->body, ['class' =>'form-control', 'placeholder'=>'Body'])}}
  </div>
  {{Form::hidden('_method', 'PUT')}}
  {{Form::submit('Submit', ['class'=>'btn btn-primary '])}}
    {!! Form::close() !!}
@endsection
