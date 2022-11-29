<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class WebsiteControler extends Controller
{
    public function home()
    {
        return view('website.index');
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
