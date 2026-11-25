@extends('layout')

@section('title', 'Post List')

@section('content')
    <section class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>



        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{ $post->content }}
                        </p>

                    </div>
                </div>
    </section>

@endsection

@section('comment')
    <div class="container mt-4">

        <h4 class="mb-3">Comments</h4>

        @forelse ($comments as $comment)

            <div class="card mb-3">
                <div class="card-body">

                    <p class="card-text">
                        {{ $comment->content }}
                    </p>

                    <small>
                        {{ $comment->created_at}}
                    </small>

                </div>
            </div>

        @empty

            <div class="card mb-3">
                There is no comment yet.
            </div>

        @endforelse

    <div>
    <form action="{{ route('posts.comment', [$post]) }}" method="post">
    @csrf
        <div class="form-group">
        <label>Write a comment</label>

            <textarea name="content" class="form-control"
            placeholder="Write your comment...">{{ old('content') }}</textarea>
                @error('content')
            <span style="color:red">{{ $message }}</span>
                @enderror
            </div>

        <button type="submit" class="btn btn-primary mt-2">
        Send
            </button>
        </form>
        </div>
@endsection
