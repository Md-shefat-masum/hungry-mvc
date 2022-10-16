<?php
namespace App\Http\Controllers;

class WebsiteController
{
    public function home()
    {
        return view('frontend/home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    
}
