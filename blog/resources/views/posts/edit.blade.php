@extends('layouts.main')

@section('title')
  Home Page
@endsection



@section('content')
<form method="POST" action="/posts/{{ $post->id }}">
    <h1>Edit a post</h1>
    <hr>
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title" class="form-label" >Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="enter title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" >{{ $post->content }}</textarea>
    </div>
    <div class="form-group">
        <label for="content" class="form-label">Content</label>
        
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            @if($category->id == $post->category_id)
                <option value="{{ $category->id }}"   {{ $post->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                
            @else
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endif
            @endforeach
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection