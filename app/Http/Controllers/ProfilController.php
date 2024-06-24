<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }
    public function profiladmin()
    {
        $user = Auth::user();
        return view('admin.profileadmin', compact('user'));
    }
   public function edit()
    {
        $user = Auth::user();
        return view('users.editprofile', compact('user'));
        
    }
    public function home()
    {
        return view('admin.dashboard');
    }
    public function editadmin()
    {
        $user = Auth::user();
        return view('admin.editprofil', compact('user'));
        
    }

    public function update(Request $request)
    {
    $user = Auth::user();

    // Validasi data yang diterima
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'date_of_birth' => 'required|date',
        'address' => 'required|max:400',
    ]);

    if ($request->hasFile('profile_photo')) {
        // Delete old profile photo if it exists
        if ($user->profile_photo_path) {
            Storage::disk('public')->delete($user->profile_photo_path);
        }

        $path = $request->file('profile_photo')->store('profile_photos', 'public');
        $user->profile_photo_path = $path;
    }

        // Perbarui data user
        $user->update($validatedData);

        return redirect()->route('profile', $user->user_id)->with('success', 'User updated successfully');
    }
    
    public function updateadmin(Request $request)
    {
        $user = Auth::user();

        // Validasi data yang diterima
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'date_of_birth' => 'required|date',
            'address' => 'required|max:400',
        ]);
        if ($request->hasFile('profile_photo')) {
            // Delete old profile photo if it exists
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $user->profile_photo_path = $path;
        }
        // Perbarui data user
        $user->update($validatedData);

        return redirect()->route('profil', $user->id)->with('success', 'User updated successfully');
    }
}
