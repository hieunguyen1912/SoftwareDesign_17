@extends('admin.layout.master')

@section('main_content')
<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column min-vh-100">
        @include('admin.layout.navbar')

        <section class="section">
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <form action="{{ route('admin_profile_submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row align-items-center">
                                    <!-- Ảnh Profile -->
                                    <div class="col-md-3 text-center">
                                        <img src="{{ asset('uploads/'.Auth::guard('admin')->user()->photo) }}" 
                                            alt="Profile Photo" 
                                            class="profile-photo img-fluid rounded-circle mb-3">
                                        <input type="file" class="form-control mt-3" name="photo">
                                    </div>
                                    <!-- Form thông tin -->
                                    <div class="col-md-9">
                                        <div class="mb-3">
                                            <label class="form-label">Name *</label>
                                            <input type="text" class="form-control" name="name" 
                                                value="{{ Auth::guard('admin')->user()->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email *</label>
                                            <input type="text" class="form-control" name="email" 
                                                value="{{ Auth::guard('admin')->user()->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Retype Password</label>
                                            <input type="password" class="form-control" name="confirm_password">
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary px-4">Update</button>
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
