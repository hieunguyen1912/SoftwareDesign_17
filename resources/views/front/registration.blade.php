@extends('front.layout.master')

@section('main_content')
<div class="page-top" style="background-image: url('/uploads/banner.jpg'); background-size: cover; background-position: center; padding: 50px 0; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <h2 class="fw-bold">Create Account</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="" class="text-white">Create Account</a></li>
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
                    <form action="{{ route('registration_submit') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email Address *</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password *</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirm Password *</label>
                            <input type="password" class="form-control" name="retype_password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website">
                                Create Account
                            </button>
                        </div>
                    </form>
                    <div class="mb-3">
                        <a href="{{ route('login') }}" class="primary-color">Existing User? Login Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection