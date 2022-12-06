<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function all()
    {
        $data = User::orderBy('id', 'DESC')->paginate(10);
        return view('admin.management.users.all', compact('data'));
    }

    public function create()
    {
        $roles = UserRole::get();
        return view('admin.management.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => ['required'],
            'email' => ['required','email','unique:users'],
            'phone_number' => ['required','unique:users'],
            'role_id' => ['required'],
            'photo' => ['required','mimes:png,jpg,jpeg'],
            'password' => ['required','min:8','confirmed'],
        ]);

        $user = User::create($request->except('photo','password_confirmation'));
        if($request->hasFile('photo')){
            $user->photo = Storage::put('uploads/users', $request->file('photo'));;
        }
        $user->save();

        return redirect()->back()->with('success','user created.');
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('admin.management.users.show',compact('data'));
    }
}
