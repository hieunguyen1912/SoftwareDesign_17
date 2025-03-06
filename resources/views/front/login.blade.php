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
                        <li class="breadcrumb-item"><a href="" class="text-white">Login</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</div>

<div class="page-content pt_70 pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="{{ route('login_submit') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Email Address</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website">
                                Login
                            </button>
                            <a href="{{ route('forget_password') }}" class="primary-color">Forget Password?</a>
                        </div>
                    </form>
                    <div class="mb-3">
                        <a href="{{ route('registration') }}" class="primary-color">Don't have an account? Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection