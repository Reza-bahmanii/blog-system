@extends('layout')

@section('title' , 'Edit Post')

@section('content')
<form action="{{ route('posts.update', ['postId' => $post->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
            placeholder="enter title" value="{{ old('title',$post->title) }}">
        @error('title')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div><br>
    <div class="form-group">
        <label>Category</label>
        <select name="category" id="category">
            // add old 
        </select>
    </div><br>

    <div class="form-group">
        <label>Description</label>
        <textarea name="content" id="content" class="form-control">{{ old('content',$post->content) }}</textarea>
        @error('content')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div><br>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection