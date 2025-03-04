<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Destination;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function Dashboard() {

        $total_categories = BlogCategory::count();
        $total_news = Post::count();
        $total_destinations = Destination::count();
        $total_users = User::count();

        return view('admin.dashboard', compact('total_categories', 'total_news', 'total_destinations', 'total_users'));
    }
}
