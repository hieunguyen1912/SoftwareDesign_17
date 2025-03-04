<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="{{ route('admin_dashboard') }}" class="{{ Request::is('admin/dashboard') ? 'text-primary' : '' }}">
        <i class="fas fa-hand-point-right"></i>
        Dashboard
    </a>
    <a href="{{ route('admin_profile') }}" class="{{ Request::is('admin/profile') ? 'text-primary' : '' }}">
        <i class="fas fa-hand-point-right"></i>
        Profile
    </a>
    <div class="dropdown">
        <a class=" dropdown-toggle {{ Request::is('admin/blog-category/*') ? 'active' : '' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-hand-point-right"></i>Blog Section
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('admin_post_index') }}">Blogs</a></li>
            <li><a class="dropdown-item {{ Request::is('admin/blog-category/*') ? 'active' : '' }}" href="{{ route('admin_blog_category_index') }}">Category</a></li>
        </ul>
    </div>

    <a href="{{ route('admin_destination_index') }}" class="{{ Request::is('admin/destination/*') ? 'text-primary' : '' }}">
        <i class="fas fa-hand-point-right"></i>
        Destination
    </a>

    <a href="{{ route('admin_users') }}" class="{{ Request::is('admin/users/*') ? 'text-primary' : '' }}">
        <i class="fas fa-hand-point-right"></i>
        User
    </a>
    
</div>
