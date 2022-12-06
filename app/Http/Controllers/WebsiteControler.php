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
        // dd(request()->all());

        $this->validate($request,[
            'name'=>['required','min:5','string','alpha'],
            'email'=>['required','min:9','email'],
            'message'=>['required','min:30'],
            'subject'=>['required','min:3'],
        ],[
            'name.required' => 'please give your name',
            'name.min:5' => 'your name should be at least 5 character',
        ]);

        $contact = new Contact();
        $contact->name = request()->name;
        $contact->email = request()->email;
        $contact->subject = request()->subject;
        $contact->message = request()->message;
        $contact->save();

        // $contact = Contact::create(request()->all());

        // $contact = Contact::insertGetId([
        //     'name' => request()->name,
        //     'email' => request()->email,
        //     'subject' => request()->subject,
        //     'message' => request()->message,
        //     'created_at' => Carbon::now()->toDateTimeString(),
        // ]);

        return redirect()->back()->with('success', 'contact message sent.');
    }
}
