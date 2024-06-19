<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
Use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::where('user_id', auth()->id())->get();
        return view('users.favorite', compact('favorites'));
    }
    public function store(Request $request)
    {
        Log::info('Request Data:', $request->all());

        $request->validate([
            'product_id' => 'required|exists:products,product_id',
        ]);

        Log::info('Validation passed');

        Favorite::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
        ]);

        Log::info('Added to favorite');

        return redirect()->back()->with('success', 'Added to Favorite.');
    }

    public function destroy ($favoriteId)
    {
        $favorite = Favorite::findOrFail($favoriteId);
        $favorite->delete();

        return redirect()->back()->with('success', 'Favorite berhasil dihapus dari favorite!');
    }
}
