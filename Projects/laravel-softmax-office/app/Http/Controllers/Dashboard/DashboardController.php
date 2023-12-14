<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function dashboard()
    {
        return view('pages.dashboard.dashboard');
    }

    public function teacherDashboard()
    {
        return view('pages.dashboard.dashboard1');
    }
    public function studentDashboard()
    {
        return view('pages.dashboard.dashboard2');
    }
    public function salesDashboard()
    {
        return view('pages.dashboard.dashboard3');
    }
    public function memberDashboard()
    {
        $users = User::all();
        return view('pages.dashboard.dashboard4',compact('users'));
    }


}
