<?php

namespace App\Http\Controllers;

use App\Models\User;
use Symfony\Component\VarDumper\Cloner\Data;

class WebsiteController
{
    public function home()
    {
        session()->put('user_name','admin');
        session()->put('is_admin',false);
        session()->put('last_time',date('h:i:s a'));
        dd($_SESSION, session()->all());
        return view('frontend/home');
    }
    public function about()
    {
        $user = new User();
        $data = $user->select('*')->get();
        return view('about', ['data' => $data]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        echo " blog list";
    }
    public function blog_details($id, $title)
    {
        echo " blog details";
        // dd($_REQUEST);
        // dd($id, $title);
    }
    public function profile_details()
    {
        echo "profile details";
        dd($_REQUEST);
    }
}
