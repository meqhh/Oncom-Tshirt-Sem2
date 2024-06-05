<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // Ensure the base controller is imported
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
        
        // Hash password
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        //  array data baru tanpa repassword
        $userData = [
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ];

        // Simpan data ke database
        User::create($userData);

        // Redirect atau kirim respon sukses
        return redirect('/')->with('success', 'Registration successful!');
    }
}