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
                </div>
            </div>
        </section>
        <!--Section: Content-->

@endsection