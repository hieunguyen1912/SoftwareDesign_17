@extends('admin.layout.master')
@section('main_content')
<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column">
        @include('admin.layout.navbar')
        <section class="section container bg-white p-4 rounded shadow">
            <div class="section-header justify-content-between">
                <h1>Edit User</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_users') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded-lg shadow w-100" style="max-width: 1000px;">
                            <form action="{{ route('admin_user_edit_submit', $user->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        @if($user->photo != '')
                                        <img src="{{ asset('uploads/'.$user->photo) }}" alt="" class="img-thumbnail">
                                        @else
                                        <img src="{{ asset('uploads/default.png') }}" alt="" class="img-thumbnail">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="photo">Change Photo</label>
                                    <div><input type="file" name="photo"></div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Email *</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone *</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country *</label>
                                    <input class="form-control" name="country" value="{{ $user->country }}">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address *</label>
                                    <input class="form-control" name="address" value="{{ $user->address }}">
                                </div>

                                <div class="form-group">
                                    <label for="city">City *</label>
                                    <input class="form-control" name="city" value="{{ $user->city }}">
                                </div>

                                <div class="form-group">
                                    <label for="zip">Zip *</label>
                                    <input class="form-control" name="zip" value="{{ $user->zip }}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input class="form-control" name="password">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status *</label>
                                    <select name="status" class="form-control">
                                        <option value="1" @if($user->status == 1) selected @endif>
                                            Active
                                        </option>
                                        <option value="0" @if($user->status == 0) selected @endif>
                                            Pending
                                        </option>
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