@extends('admin.layout.master')

@section('main_content')
<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column min-vh-100">
        @include('admin.layout.navbar')
        <div class="container bg-white p-4 rounded shadow">
            <div class="section-header justify-content-between">
                <h1>Users</h1>
                <div class="ml-auto"> 
                    <a href="{{ route('admin_user_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($user->photo != '')
                            <img src="{{ asset('uploads/'.$user->photo) }}" alt="" class="img-thumbnail">
                            @else
                            <img src="{{ asset('uploads/default.png') }}" alt="" class="img-thumbnail">
                            @endif
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <th>
                            @if($user->status == 1)
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                        </th>
                        <td class="pt_10 pb_10">
                            <a href="{{ route('admin_user_edit', $user->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('admin_user_edit_submit', $user->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
