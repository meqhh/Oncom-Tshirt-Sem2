<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ListUsersController extends Controller
{
    public function showUser()
    {
        // Mengambil semua data pengguna dari tabel users
        $users = User::all();
        
        // Menampilkan view dengan data pengguna yang diambil
        return view('admin.list_users', compact('users'));
    }

    public function destroy($id)
    {
        // Mencari pengguna berdasarkan id dan menghapusnya
        $users = User::findOrFail($id);
        $users->delete();

        // Mengarahkan kembali dengan pesan sukses
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function update(Request $request)
{
    $user = Auth::user();

    Log::info('User data:', ['user' => $user]);

    // Validasi data yang diterima
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'date_of_birth' => 'required|date',
        'address' => 'required|max:400',
    ]);

    Log::info('Validated data:', ['validatedData' => $validatedData]);

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
}