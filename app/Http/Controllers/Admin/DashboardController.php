<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function demo_all()
    {
        return view('admin.common.all');
    }

    public function demo_create()
    {
        return view('admin.common.create');
    }

    public function demo_show()
    {
        return view('admin.common.show');
    }
}
