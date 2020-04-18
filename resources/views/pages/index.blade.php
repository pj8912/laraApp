@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is my laraBlog</p>
    <p> <a class="btn btn-primary btn-lg" href="./login">login</a> <a class="btn btn-success btn-lg" href="./signup">SignUp</a> </p>
  </div>
@endsection
