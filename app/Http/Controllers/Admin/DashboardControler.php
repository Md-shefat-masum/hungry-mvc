<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    public function index()
    {
        //function_body
        return view('admin.dashboard');
    }
    public function demo_all()
    {
        //function_body
        return view('admin.common.all');
    }
    public function demo_show()
    {
        //function_body
        return view('admin.common.show');
    }
    public function demo_create()
    {
        //function_body
        return view('admin.common.create');
    }
}
