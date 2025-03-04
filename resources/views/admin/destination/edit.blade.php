@extends('admin.layout.master')
@section('main_content')
<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="main-content flex-grow-1 d-flex flex-column">
        @include('admin.layout.navbar')
        <section class="section container bg-white p-4 rounded shadow">
            <div class="section-header justify-content-between">
                <h1>Edit Destination</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_destination_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded-lg shadow w-100" style="max-width: 1000px;">
                            <form action="{{ route('admin_destination_edit_submit', $destination->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Existing  Photo</label>
                                    <div><img src="{{ asset('uploads/'.$destination->featured_photo) }}" alt="" class="img-thumbnail"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Change Photo</label>
                                    <div><input type="file" name="featured_photo"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Name *</label>
                                            <input type="text" class="form-control" name="name" value="{{ $destination->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Slug *</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $destination->slug }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="description">Description *</label>
                                    <textarea class="form-control editor" id="content" name="description" rows="15" cols="60">{{ $destination->description }}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Country *</label>
                                            <input type="text" class="form-control" name="country" value="{{ $destination->country }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Language *</label>
                                            <input type="text" class="form-control" name="language" value="{{ $destination->language }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="slug">Currency *</label>
                                            <input type="text" class="form-control" name="currency" value="{{ $destination->currency }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="slug">Area *</label>
                                            <input type="text" class="form-control" name="area" value="{{ $destination->area }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="slug">Timezone *</label>
                                            <input type="text" class="form-control" name="timezone" value="{{ $destination->timezone }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Visa requirement *</label>
                                    <input type="text" class="form-control" name="visa_requirement" value="{{ $destination->visa_requirement }}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Best time to visit *</label>
                                    <input type="text" class="form-control" name="best_time_to_visit" value="{{ $destination->best_time_to_visit }}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Health & Safety *</label>
                                    <input type="text" class="form-control" name="health_safety" value="{{ $destination->health_safety }}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Map(iframe code) *</label>
                                    <input type="text" class="form-control" name="map" value="{{ $destination->map }}">
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