@extends('admin.layout.master')

@section('main_content')
<section class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow border-0">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Admin Panel Login</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('admin_login_submit')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{route('admin_forget_password')}}" class="text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection