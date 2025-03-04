@extends('front.layout.master')

@section('main_content')

<div class="page-top" style="background-image: url('/uploads/banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <h2>Destinations</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('destinations') }}" class="text-white">Destination</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

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
</div>

<div class="container pb-50">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {!! $destinations->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>

@endsection

        
        