<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required'=>'Email Wajib di Isi',
            'password.required'=>'Password Wajib di Isi',
            
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if (Auth::user()->role == 'admin'){
                return redirect('beranda/admin');
            } elseif (Auth::user()->role == 'user'){
                return redirect('beranda');
            }
        } else{
            return redirect('/login')->withErrors('Invalid Username and Password')->withInput();
         }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}