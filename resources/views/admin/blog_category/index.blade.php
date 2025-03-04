@extends('admin.layout.master')

@section('main_content')
<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column min-vh-100">
        @include('admin.layout.navbar')
        <div class="container bg-white p-4 rounded shadow">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="ml-auto">
                    <a href="{{route('admin_blog_category_create')}}" class="btn btn-primary">
                        <i class="fas fa-plus">Add New</i>
                    </a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blog_categories as $blog_category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $blog_category->name }}
                        </td>
                        <td>
                            {{ $blog_category->slug }}
                        </td>
                        <td class="pt_10 pb_10">
                            <a href="{{ route('admin_blog_category_edit', $blog_category->id) }}"
                            class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('admin_blog_category_delete', $blog_category->id) }}"
                            class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
