@extends('adminlayout')

@section('title', 'Edit User')

@section('page-title', 'ویرایش کاربران')

@section('content')
    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">نام کاربر</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="email" name="email" id="email" class="form-control"
                value="{{ old('name', $user->email) }}">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">نقش کاربر</label>
            <select name="role" id="role" class="form-select">
                <option value="">انتخاب نقش</option>
                <option value="user">کاربر</option>
                <option value="author">نویسنده</option>
                <option value="admin">مدیر</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            ذخیره تغییرات
        </button>

    </form>
@endsection
