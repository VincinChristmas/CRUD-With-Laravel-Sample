@extends('layouts.main')

@section('title')
  Home Page
@endsection

@section('sidebar')
   This is the side menu.
@endsection

@section('content')
<form method="POST" action="/posts">
    <h1>Create a Post</h1>
    <hr>
    @csrf
    <div class="form-group">
        <label for="title" class="form-label" >Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="enter title">
    </div>
    <div class="form-group">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content"></textarea>
    </div>
    <div class="form-group">
        <label for="content" class="form-label">Content</label>
        
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    
    <button type="submit" class="btn btn-primary">Submit</button>

@endsection