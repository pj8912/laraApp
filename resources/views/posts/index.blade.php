@extends('layouts.app')

@section('content')
  <h3>Post</h3>
  @if (count($posts) > 1)
    @foreach ($posts as $post)
      <div class="well">
        <h3><a href="./posts/{{$post->id}}">
          {{$post->title}}  </a></h3>

        <small>posted on {{$post->created_at}}</small>
      </div>
    @endforeach
  @else
    <p>No posts found</p>
  @endif
@endsection
