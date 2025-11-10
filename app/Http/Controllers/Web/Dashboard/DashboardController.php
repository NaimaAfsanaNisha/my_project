<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
        return view('dashboard.main-content');
    }

    function blog(){
        return view('dashboard.blog');
    }
}
