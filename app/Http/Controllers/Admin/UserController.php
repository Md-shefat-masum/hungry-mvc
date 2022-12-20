<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all()
    {
        //function_body
        return view('admin.management.users.all');
    }

    public function show()
    {
        //function_body
        return view('admin.management.users.show');
    }

    public function create()
    {
        //function_body
        return view('admin.management.users.create');
    }

}
