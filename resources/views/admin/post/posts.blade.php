@extends('adminlayout')

@section('title', 'Post Pannel')

@section('page-title', 'مدیریت پست ها')

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>نویسنده</th>
                <th>دسته‌بندی</th>
                <th>تگ‌ها</th>
                <th>تاریخ ثبت</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        @if ($post->tags->isNotEmpty())
                        @foreach ($post->tags as $tags)
                            <span class="badge bg-info text-white">{{$tags->name}}</span>
                        @endforeach
                           
                        @else
                            <span class="text-danger">not okay</span>
                        @endif
                    </td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <form action="#" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
        @endforeach
    </table>
@endsection
