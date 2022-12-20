<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebsiteControler extends Controller
{
    public function home()
    {
        return view('website.index');
    }

    public function contact()
    {

        return view('website.contact');
    }

    public function contact_submit(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => ['required', 'min:5', 'string', ],
                'email' => ['required', 'min:9', 'email'],
                'subject' => ['required', 'min:3'],
                'message' => ['required', 'min:30'],
            ],
            [
                'username.required'=>'please give your name',
                'username.min:5'=>'your name should be at least 5 character',


            ]
        );


        // $contact=new Contact();
        // $contact ->username=request()->username;
        // $contact ->email=request()->email;
        // $contact ->subject=request()->subject;
        // $contact ->message=request()->message;
        // $contact->save();


        // dd($contact);





    //    $contact= contact::create(request()->all());
    //       dd($contact);

        $contact=Contact::insert([
            'username' => request()->username,
            'email' => request()->email,
            'subject' => request()->subject,
            'message' => request()->message,
            'created_at'=> Carbon::now()->toDateTimeString(),
        ]);
        // dd($contact);

        return redirect()->back()->with('success', 'contact message sent.');
    }
}
