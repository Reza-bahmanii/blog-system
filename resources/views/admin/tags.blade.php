@extends('adminlayout')

@section('title', 'Tag Pannel')

@section('page-title', 'مدیریت برچسب ها')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <form action="{{ route('admin.storeTag') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">اسم برچسب</label>
            <input type="text" name="name" id="name" class="form-control">
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control">
            @error('slug')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            ذخیره
        </button>

    </form>
@endsection