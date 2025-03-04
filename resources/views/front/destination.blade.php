@extends('front.layout.master')

@section('main_content')

<div class="page-top" style="background-image: url('/uploads/banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <h2 class="fw-bold">{{ $destination->name }}</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('destinations') }}" class="text-white">Destinations</a></li>
                        <li class="breadcrumb-item active text-white">{{ $destination->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="destination-detail py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <!-- Hình Ảnh -->
                <div class="card shadow-sm mb-4">
                    <img src="{{ asset('uploads/'.$destination->featured_photo) }}" class="card-img-top rounded" alt="Destination Image">
                </div>

                <!-- Mô tả -->
                <div class="card shadow-sm mb-4 p-4">
                    <h2 class="text-primary">Description</h2>
                    <p class="text-muted">
                        {!! $destination->description !!}
                    </p>
                </div>

                <!-- Bảng Thông Tin -->
                <div class="card shadow-sm mb-4 p-4">
                    <h2 class="text-primary">Information</h2>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tr>
                                <td><b>Country</b></td>
                                <td>{{ $destination->country }}</td>
                            </tr>
                            <tr>
                                <td><b>Major Cities</b></td>
                                <td>{{ $destination->major_cities ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td><b>Visa Requirements</b></td>
                                <td>{{ $destination->visa_requirement }}</td>
                            </tr>
                            <tr>
                                <td><b>Languages Spoken</b></td>
                                <td>{{ $destination->language }}</td>
                            </tr>
                            <tr>
                                <td><b>Currency Used</b></td>
                                <td>{{ $destination->currency }}</td>
                            </tr>
                            <tr>
                                <td><b>Activities</b></td>
                                <td>
                                    <span class="badge bg-success">Surfing</span>
                                    <span class="badge bg-info">Scuba Diving</span>
                                    <span class="badge bg-warning">Hiking</span>
                                    <span class="badge bg-danger">Camping</span>
                                    <span class="badge bg-primary">Skydiving</span>
                                    <span class="badge bg-secondary">Wildlife Safari</span>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Best Time to Visit</b></td>
                                <td>{{ $destination->best_time_to_visit }}</td>
                            </tr>
                            <tr>
                                <td><b>Health and Safety</b></td>
                                <td>{{ $destination->health_safety }}</td>
                            </tr>
                            <tr>
                                <td><b>Area (km²)</b></td>
                                <td>{{ $destination->area }}</td>
                            </tr>
                            <tr>
                                <td><b>Time Zone</b></td>
                                <td>{{ $destination->timezone }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Bản Đồ -->
                <div class="card shadow-sm p-4">
                    <h2 class="text-primary">Map</h2>
                    <div class="location-map">
                        {!! $destination->map !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
