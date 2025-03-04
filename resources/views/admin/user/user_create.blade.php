@extends('admin.layout.master')
@section('main_content')
<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column">
        @include('admin.layout.navbar')
        <section class="section container bg-white p-4 rounded shadow">
            <div class="section-header justify-content-between">
                <h1>Create User</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_users') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded-lg shadow w-100" style="max-width: 1000px;">
                            <form action="{{ route('admin_user_create_submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="photo">Photo *</label>
                                    <input type="file" class="form-control" name="photo">
                                </div>
                                <div class="form-group">
                                    <label for="title">Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Email *</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Phone *</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                    <label for="short-description">Country *</label>
                                    <input class="form-control" name="country" value="{{ old('short_description') }}">
                                </div>

                                <div class="form-group">
                                    <label for="short-description">Address *</label>
                                    <input class="form-control" name="address" value="{{ old('address') }}">
                                </div>

                                <div class="form-group">
                                    <label for="short-description">City *</label>
                                    <input class="form-control" name="city" value="{{ old('city') }}">
                                </div>

                                <div class="form-group">
                                    <label for="short-description">Zip *</label>
                                    <input class="form-control" name="zip" value="{{ old('zip') }}">
                                </div>

                                <div class="form-group">
                                    <label for="short-description">Password *</label>
                                    <input class="form-control" name="password" value="{{ old('password') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status *</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Pending</option>
                                    </select>
                                </div>
                                
                                <input type="submit" class="btn btn-primary"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection