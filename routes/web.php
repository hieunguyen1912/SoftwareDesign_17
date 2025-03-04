<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminBlogCategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminDestinationController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/registration', [FrontController::class, 'registration'])->name('registration');
Route::get('/registration_verify/{email}/{token}', [FrontController::class, 'registration_verify_email'])->name('registration_verify_email');
Route::post('/registration', [FrontController::class, 'registration_submit'])->name('registration_submit');
Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::post('/login', [FrontController::class, 'login_submit'])->name('login_submit');
Route::get('/forget_password', [FrontController::class, 'forget_password'])->name('forget_password');
Route::post('/forget_password', [FrontController::class, 'forget_password_submit'])->name('forget_password_submit');
Route::get('/reset-password/{token}/{email}', [FrontController::class, 'reset_password'])->name('reset_password');
Route::post('/reset-password/{token}/{email}', [FrontController::class, 'reset_password_submit'])->name('reset_password_submit');

Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/post/{slug}', [FrontController::class, 'post'])->name('post');
Route::get('/category/{slug}', [FrontController::class, 'category'])->name('category');
Route::get('/destinations/{slug}', [FrontController::class, 'destination'])->name('destination');
Route::get('/destinations', [FrontController::class, 'destinations'])->name('destinations');


//User
Route::middleware(['auth'])->prefix('user')->group(function () {    
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user_dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('user_logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('user_profile');
    Route::post('/profile', [UserController::class, 'profile_submit'])->name('user_profile_submit');
});

//Admin
Route::middleware('admin')->prefix('admin')->group(function() {
    Route::get('/profile', [AdminAuthController::class, 'profile'])->name('admin_profile');
    Route::post('/profile', [AdminAuthController::class, 'profile_submit'])->name('admin_profile_submit');

    Route::get('/dashboard', [AdminDashboardController::class, 'Dashboard'])->name('admin_dashboard');

    //Blog category
    Route::get('/blog_category/index', [AdminBlogCategoryController::class, 'index'])->name('admin_blog_category_index');
    Route::get('/blog_category/create', [AdminBlogCategoryController::class, 'create'])->name('admin_blog_category_create');
    Route::post('/blog_category/create', [AdminBlogCategoryController::class, 'create_submit'])->name('admin_blog_category_create_submit');
    Route::get('/blog_category/edit/{id}', [AdminBlogCategoryController::class, 'edit'])->name('admin_blog_category_edit');
    Route::post('/blog_category/edit/{id}', [AdminBlogCategoryController::class, 'edit_submit'])->name('admin_blog_category_edit_submit');
    Route::get('/blog_category/delete/{id}', [AdminBlogCategoryController::class, 'delete'])->name('admin_blog_category_delete');


    //Post
    Route::get('/post/index', [AdminPostController::class, 'index'])->name('admin_post_index');
    Route::get('/post/create', [AdminPostController::class, 'create'])->name('admin_post_create');
    Route::post('/post/create', [AdminPostController::class, 'create_submit'])->name('admin_post_create_submit');
    Route::get('/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin_post_edit');
    Route::post('/post/edit/{id}', [AdminPostController::class, 'edit_submit'])->name('admin_post_edit_submit');
    Route::get('/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin_post_delete');


    //Destination
    Route::get('/destination/index', [AdminDestinationController::class, 'index'])->name('admin_destination_index');
    Route::get('/destination/create', [AdminDestinationController::class, 'create'])->name('admin_destination_create');
    Route::post('/destination/create', [AdminDestinationController::class, 'create_submit'])->name('admin_destination_create_submit');
    Route::get('/destination/edit/{id}', [AdminDestinationController::class, 'edit'])->name('admin_destination_edit');
    Route::post('/destination/edit/{id}', [AdminDestinationController::class, 'edit_submit'])->name('admin_destination_edit_submit');
    Route::get('/destination/delete/{id}', [AdminDestinationController::class, 'delete'])->name('admin_destination_delete');


    //User
    Route::get('/users', [AdminUserController::class, 'users'])->name('admin_users');
    Route::get('/users/create', [AdminUserController::class, 'user_create'])->name('admin_user_create');
    Route::post('/users/create', [AdminUserController::class, 'user_create_submit'])->name('admin_user_create_submit');
    Route::get('/user/edit/{id}', [AdminUserController::class, 'user_edit'])->name('admin_user_edit');
    Route::post('/user/edit/{id}', [AdminUserController::class, 'user_edit_submit'])->name('admin_user_edit_submit');

    
});
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('admin_login');
    Route::post('/login', [AdminAuthController::class, 'login_submit'])->name('admin_login_submit');

    Route::get('/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('admin_forget_password');
    Route::post('/forget-password', [AdminAuthController::class, 'forget_password_submit'])->name('admin_forget_password_submit');

    Route::get('/reset-password/{token}/{email}', [AdminAuthController::class, 'resetPassword'])->name('admin_reset_password');
    Route::post('/reset-password/{token}/{email}', [AdminAuthController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
    
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin_logout');
});
