<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ListUsersController extends Controller
{
    public function showUser()
    {
        // Mengambil semua data pengguna dari tabel users
        $users = User::all();
        
        // Menampilkan view dengan data pengguna yang diambil
        return view('admin.list_users', compact('users'));
    }

    public function destroy($user_id)
    {
        // Mencari pengguna berdasarkan id dan menghapusnya
        $users = User::findOrFail($user_id);
        $users->delete();

        // Mengarahkan kembali dengan pesan sukses
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}