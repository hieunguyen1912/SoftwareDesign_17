@extends('admin.layout.master')
@section('main_content')

<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column min-vh-100">
        @include('admin.layout.navbar')
        <div class="main_content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>Edit Blog Category</h1>
                    <div class="ml-auto">
                        <a href="{{ route('admin_blog_category_index') }}" class="btn btn-primary">
                            <i class="fas fa-plus">View All</i>
                        </a>
                    </div>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">    
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin_blog_category_edit_submit', $blog_category->id )}}" method="post">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="" class="form-label">Name *</label>
                                            <input type="text" class="form-control" name="name" value="{{$blog_category->name}}">
                                        </div>
                                        <div class="mb-4">
                                            <label for="" class="form-label">Slug *</label>
                                            <input type="text" class="form-control" name="slug" value="{{$blog_category->slug}}">
                                        </div>
                                        <div class="mb-4">
                                            <label for="" class="form-label"></label>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


@endsection