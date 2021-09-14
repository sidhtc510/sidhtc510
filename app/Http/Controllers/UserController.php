<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => Hash::make($request->password),
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);



        session()->flash('flash_message', 'you`ve been registered and logined');

        return redirect()->home();
    }



    public function loginForm()
    {
        return view('user.login');
    }



    public function login(Request $request)
    {
        //
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
