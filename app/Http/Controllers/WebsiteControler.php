<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class WebsiteControler extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function profile()
    {
        return view('profile');
    }

    public function contact()
    {
        $data = Contact::get();
        return view('contact', ['data' => $data]);
    }

    public function contact_submit()
    {
        // dd(request()->all());

        Contact::insert([
            'fullname' => request()->fullname,
            'description' => request()->description,
        ]);

        return redirect()->back()->with('success', 'contact message sent.');
    }
}
