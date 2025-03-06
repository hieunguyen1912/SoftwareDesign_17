@extends('front.layout.master')

@section('main_content')
<div class="page-top" style="background-image: url('/uploads/banner.jpg'); background-size: cover; background-position: center; padding: 50px 0; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <h2 class="fw-bold">Login   </h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="" class="text-white">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</div>

<div class="page-content user-panel pt_70 pb_70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('user.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <h3 class="mb_20">Hello, {{ Auth::guard('web')->user()->name }}</h3>
                <div class="row box-items">
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>3</h4>
                            <p>Completed Orders</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box2">
                            <h4>2</h4>
                            <p>Pending Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection