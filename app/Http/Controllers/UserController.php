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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,

        ])) {
            

            if (Auth::user()->is_admin) {
                session()->flash('flash_message', 'You are loged in as Admin');
                return redirect()->home();
                // return redirect()->route('admin.index');
            } else {

                session()->flash('flash_message', 'Hello '. Auth::user()->name .', you are loged in!');
                return redirect()->home();
            }
        }


        return redirect()->back()->with('error', 'incorrect login or password');
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
