@extends('front.layout.master')

@section('main_content')
<section class="banner" style="background-image:  url('uploads/slide-1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="banner-content">
          <h2>Chuyến đi đến các thành phố đẹp</h2>
          <p>
            Khám phá các thành phố sôi động, đắm chìm trong các nền văn hóa đa dạng, đến thăm các địa danh,
            thưởng thức các món ăn địa phương và gắn kết với người dân địa phương mang đến những trải nghiệm khó quên.
          </p>
          <a class="btn btn-primary">
            Đọc thêm
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="special">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <!-- Phần bên trái -->
          <div class="col-md-6">
            <div class="left-side">
              <div class="inner">
                <h3>Chào Mừng Đến với Chúng Tôi</h3>
                <p>
                  Tại đây, nhiệm vụ của chúng tôi là biến những giấc mơ du lịch thành hiện thực bằng cách chứng minh những trải nghiệm được cá nhân hóa và đáng nhớ. Chúng tôi tận dụng chuyên môn và các đối tác đáng tin cậy của chúng tôi để đảm bảo mọi chuyến đi là liền mạch và thú vị.
                </p>
                <p>
                  Chúng tôi tin rằng du lịch thúc đẩy sự phát triển cá nhân và hiểu biết văn hóa. Mục tiêu của chúng tôi là giúp khám phá các điểm đến mới và kết nối với các nền văn hóa thợ lặn. Chúng tôi thúc đẩy du lịch bền vững đến các cộng đồng tác động tích cực và bảo tồn vẻ đẹp hành tinh của chúng tôi.
                </p>
                <a href="#" class="btn btn-primary">Đọc Thêm</a>
              </div>
            </div>
          </div>
          <!-- Phần bên phải -->
          <div class="col-md-6">
            <div class="right-side" style="background-image: url(uploads/about-1.jpg);">
              <!-- Phần background-image được thiết lập trong CSS -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container py-5">
    <h1 class="text-center mb-3">Những Địa Điểm Nổi Tiếng</h1>
    <p class="text-center text-muted mb-5">Khám phá những địa điểm du lịch nổi tiếng nhất</p>

    <div class="row">
        @foreach($destinations as $destination)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="destination-card shadow-sm">
                <div class="destination-image">
                    <a href="{{ route('destination', $destination->slug) }}">
                        <img src="{{ asset('uploads/'.$destination->featured_photo) }}" class="card-img-top" alt="Image of Destination">
                    </a>
                </div>
                <div class="destination-body">
                    <p class="destination-text">{{ $destination->name }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('destinations') }}" class="btn btn-primary">View All Destinations</a>
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

@endsection