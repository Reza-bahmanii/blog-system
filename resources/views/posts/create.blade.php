@extends('layout')

@section('title', 'Creat Post')

@section('content')

    <div class="container mx-auto p-4">
        <form action="" method="post" class="bg-white p-6 shadow rounded">
            <div class="mb-4">
                <label class="block text-grey-700">Title</label>
                <input type="text" name="title" placeholder="title" class="w-full p-2 border rounded mt-1">
            </div>

            <div class="mb-4">
                <label class="block text-grey-700">Description</label>
                <textarea name="content" class="w-full p-2 border rounded mt-1" rows="4"></textarea>
            </div>

            <button type="submit" class="bg-blue">Submit</button>
        </form>
    </div>
@endsection