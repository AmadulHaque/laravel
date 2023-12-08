<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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
        return view('pages.dashboard.dashboard4');
    }


}
