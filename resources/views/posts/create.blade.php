@extends('layout')

@section('title', 'Creat Post')

@section('content')

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                placeholder="enter title" value="{{ old('title') }}">
            @error('title')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div><br>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div><br>

        <div class="form-group">
            <label>Description</label>
            <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
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