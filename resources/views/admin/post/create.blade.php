@extends('admin.layout.master')
@section('main_content')
<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column">
        @include('admin.layout.navbar')
        <section class="section container bg-white p-4 rounded shadow">
            <div class="section-header justify-content-between">
                <h1>Create Post</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_post_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded-lg shadow w-100" style="max-width: 1000px;">
                            <form action="{{ route('admin_post_create_submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="photo">Photo *</label>
                                    <input type="file" class="form-control" name="photo">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title *</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug *</label>
                                    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description *</label>
                                    <textarea class="form-control editor" id="content" name="description" rows="10" cols="40">{{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="short-description">Short Description *</label>
                                    <textarea class="form-control" name="short_description" rows="2">{{ old('short_description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category *</label>
                                    <select name="blog_category_id" class="form-select">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
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