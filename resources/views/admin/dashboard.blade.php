@extends('admin.layout.master')

@section('main_content')

<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="flex-grow-1 d-flex flex-column">
        @include('admin.layout.navbar')

        <!-- Dashboard Content -->
        <div class="p-4 flex-grow-1">
            <div class="row">
                @php
                    $cards = [
                        ['title' => 'Total News Categories', 'count' => $total_categories, 'icon' => 'fas fa-user', 'color' => 'primary'],
                        ['title' => 'Total News', 'count' => $total_news, 'icon' => 'fas fa-book', 'color' => 'danger'],
                        ['title' => 'Total Users', 'count' => $total_users, 'icon' => 'fas fa-users', 'color' => 'success'],
                        ['title' => 'Total Destinations', 'count' => $total_destinations, 'icon' => 'fas fa-map-marker-alt', 'color' => 'warning'],
                    ];
                @endphp

                @foreach($cards as $card)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="dashboard-card shadow-sm">
                        <div class="icon-container bg-{{ $card['color'] }}">
                            <i class="{{ $card['icon'] }} fa-2x text-white"></i>
                        </div>
                        <div class="dashboard-content">
                            <p class="text-muted mb-1">{{ $card['title'] }}</p>
                            <p class="h4 mb-0 font-weight-bold">{{ $card['count'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection
