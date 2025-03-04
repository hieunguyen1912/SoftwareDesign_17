@extends('front.layout.master')

@section('main_content')

<!-- Phần tiêu đề và breadcrumb -->
<div class="page-top" style="background-image: url('/uploads/banner.jpg'); background-size: cover; background-position: center; padding: 50px 0; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <h2 class="fw-bold">{{ $post->title }}</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}" class="text-white">Blog</a></li>
                        <li class="breadcrumb-item active text-white">{{ $post->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</div>

<!-- Nội dung bài viết -->
<div class="post py-5">
    <div class="container">
        <div class="row">
            <!-- Bài viết chính -->
            <div class="col-lg-8 col-md-12">
                <div class="left-item bg-white p-4 shadow rounded">
                    <!-- Hình ảnh bài viết -->
                    <div class="main-photo mb-4">
                        <img src="{{ asset('uploads/'.$post->photo) }}" alt="{{ $post->title }}" class="img-fluid rounded shadow">
                    </div>

                    <!-- Thông tin bài viết -->
                    <div class="sub d-flex justify-content-between align-items-center flex-wrap">
                        <span class="badge bg-primary px-3 py-2"><i class="fas fa-calendar-alt"></i> {{ $post->created_at->format('M d, Y') }}</span>
                        <span class="badge bg-success px-3 py-2">
                            <i class="fas fa-th-large"></i> 
                            <a href="{{ route('category', $post->blog_category->slug)}}" class="text-white">{{ $post->blog_category->name }}</a>
                        </span>
                    </div>

                    <!-- Nội dung bài viết -->
                    <div class="description mt-4">
                        <p class="fs-5 lh-lg">
                            {!! $post->description !!}
                        </p>
                    </div>

                    <!-- Nút chia sẻ -->
                    <div class="share-buttons mt-4">
                        <h5 class="fw-bold">Share this post:</h5>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-primary btn-sm">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-info btn-sm">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-secondary btn-sm">
                            <i class="fab fa-linkedin-in"></i> LinkedIn
                        </a>
                        <button class="btn btn-dark btn-sm" onclick="copyLink()">
                            <i class="fas fa-link"></i> Copy Link
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar: Bài viết mới & danh mục -->
            <div class="col-lg-4 col-md-12">
                <div class="right-item p-4 bg-light shadow rounded">
                    <!-- Bài viết mới -->
                    <h3 class="fw-bold">Latest Posts</h3>
                    <ul class="list-unstyled">
                        @foreach($latest_posts as $latest_post)
                            <li class="mb-2">
                                <a href="{{ route('post', $latest_post->slug) }}" class="text-dark d-flex align-items-center">
                                    <i class="fas fa-chevron-right me-4"></i> {{ $latest_post->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Danh mục -->
                    <h3 class="fw-bold mt-4">Categories</h3>
                    <ul class="list-unstyled">
                        @foreach($categories as $category)
                            <li class="mb-2">
                                <a href="{{ route('category', $category->slug) }}" class="text-dark d-flex align-items-center">
                                    <i class="fas fa-folder me-2"></i> {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Script Copy Link -->
<script>
    function copyLink() {
        navigator.clipboard.writeText(window.location.href);
        alert("Link copied to clipboard!");
    }
</script>

@endsection
