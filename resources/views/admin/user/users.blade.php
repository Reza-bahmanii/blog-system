@extends('adminlayout')

@section('title', 'User Pannel')

@section('page-title', 'مدیریت کاربران')

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>نقش</th>
                <th>تاریخ ثبت‌نام</th>
                <th>تاریخ ویرایش</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbode>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbode>
    </table>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection
