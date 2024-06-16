<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenController extends Controller
{
    public function keranjang()
    {
        return view('users.keranjang');
    }
    public function favorite()
    {
        return view('users.favorite');
    }
    public function contact()
    {
        return view('users.contact');
    }
    public function list()
    {
        return view('users.list');
    }
    public function oncom()
    {
        return view('users.oncom');
    }
}
