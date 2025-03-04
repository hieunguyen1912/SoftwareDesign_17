@extends('admin.layout.master')

@section('main_content')
<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column min-vh-100">
        @include('admin.layout.navbar')
        <div class="container bg-white p-4 rounded shadow">
            <div class="section-header justify-content-between">
                <h1>Destination</h1>
                <div class="ml-auto"> 
                    <a href="{{ route('admin_destination_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($destinations as $destination)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('uploads/'.$destination->featured_photo) }}" alt="" class="img-thumbnail">
                        </td>
                        <td>{{ $destination->name }}</td>
                        <td class="pt_10 pb_10">
                            <a href="{{ route('admin_destination_edit',$destination->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('admin_destination_delete',$destination->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
