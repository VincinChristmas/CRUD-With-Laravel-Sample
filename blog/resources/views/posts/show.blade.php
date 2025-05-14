@extends('layouts.main')

@section('title')
  Home Page
@endsection


@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
<hr>
@endsection