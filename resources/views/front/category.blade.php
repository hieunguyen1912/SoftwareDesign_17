@extends('front.layout.master')

@section('main_content')
<div class="page-top" style="background-image: url('/uploads/banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <h2>{{ $category->name}}</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog.html" class="text-white">Category</a></li>
                        <li class="breadcrumb-item"><a href="blog.html" class="text-white">{{ $category->name}}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Latest News</h2>
        <p class="text-muted">Check out the latest news and updates from our blog post</p>
    </div>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('uploads/'.$post->photo) }}" class="card-img-top" alt="News image 1">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{ $post->title }}</h5>
                    <p class="card-text text-muted">{{ $post->short_description }}</p>
                    <a href="{{ route('post', $post->slug) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container pb-50">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {!! $posts->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>
@endsection