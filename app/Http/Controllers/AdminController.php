<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function user()
    {
        return view('users.list');
    }
    public function beranda()
    {
        return view('users.welcome');
    }
}
