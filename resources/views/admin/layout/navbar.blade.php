<!-- Header -->
<div class="header d-flex justify-content-between align-items-center px-4 py-2 bg-primary min-vh-20">
    <!-- Logo + Menu -->
    <div class="d-flex align-items-center">
        <h1 class="h4 text-white m-0">Admin Panel</h1>
    </div>
    <!-- Nút "Front End" + Avatar -->
    <div class="d-flex align-items-center">
        <button class="btn btn-warning me-10">Front End</button>
        <a class="nav-link p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img alt="image" src="{{ asset('uploads/'.Auth::guard('admin')->user()->photo) }}" 
                class="rounded-circle avatar-img">
        </a>
    </div>
</div>
