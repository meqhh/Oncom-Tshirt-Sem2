<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', auth()->id())->get();
        return view('users.keranjang', compact('carts'));
    }
    public function store(Request $request)
    {
        Log::info('Request Data:', $request->all());

        $request->validate([
            'product_id' => 'required|exists:products,product_id',
            'size' => 'required',
            'quantity' => 'required|integer|min:1',
            'shipping' => 'required',
        ]);

        Log::info('Validation passed');

        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'size' => $request->size,
            'quantity' => $request->quantity,
            'added_at' => now(),
        ]);

        Log::info('Cart created');

        return redirect()->back()->with('success', 'Product created successfully.');
    }
    public function destroy($cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');
    }
}

