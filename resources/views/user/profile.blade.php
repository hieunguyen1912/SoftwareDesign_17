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
                        <li class="breadcrumb-item"><a href="" class="text-white">Profile</a></li>
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
                <form action="{{ route('user_profile_submit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Existing Photo</label>
                            
                            <div class="form-group">
                                @if(Auth::guard()->user()->photo)
                                <img src="{{ asset('uploads/'.Auth::guard('web')->user()->photo) }}" alt="" class="user-photo">
                                @else
                                <img src="{{ asset('uploads/default.png') }}" alt="" class="user-photo">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Change Photo</label>
                            <div class="form-group">
                                <input type="file" name="photo">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Full Name *</label>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ Auth::guard('web')->user()->name }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email Address *</label>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" value="{{ Auth::guard('web')->user()->email }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone *</label>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="{{ Auth::guard('web')->user()->phone }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Country *</label>
                            <div class="form-group">
                                <input type="text" name="country" class="form-control" value="{{ Auth::guard('web')->user()->country }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Address *</label>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" value="{{ Auth::guard('web')->user()->address }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">City *</label>
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" value="{{ Auth::guard('web')->user()->city }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Zip Code *</label>
                            <div class="form-group">
                                <input type="text" name="zip" class="form-control" value="{{ Auth::guard('web')->user()->zip }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Password</label>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Retype Password</label>
                            <div class="form-group">
                                <input type="password" name="retype_password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="form_update" type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection