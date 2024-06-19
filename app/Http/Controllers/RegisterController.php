<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('users.register');
    }
    
    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:400',
            'date_of_birth' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password',
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        $userData = [
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ];

        User::create($userData);

        return redirect('/login')->with('success', 'Registration successful!');
    }
}