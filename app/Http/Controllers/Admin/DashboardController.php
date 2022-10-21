<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\bookingHistory;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = bookingHistory::count();
        $categories = Category::count();
        $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();
        $doctors = User::where('role_as','2')->count();


        return view('admin.dashboard',compact('categories','users','admins','doctors','bookings'));
    }
}
