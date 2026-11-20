@extends('layout')

@section('title', 'Creat Post')

@section('content')

    <form href="{{ route('posts.store') }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                placeholder="enter title">
        </div><br>
        <div class="form-group">
            <label>Description</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div><br>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection