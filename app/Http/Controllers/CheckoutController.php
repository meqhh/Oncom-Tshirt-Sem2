<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        $cartIds = $request->input('checkout', []);
        $userId = Auth::id();

        $carts = Cart::whereIn('cart_id', $cartIds)->get();

        foreach ($carts as $cart) {
            Checkout::create([
                'user_id' => $userId,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
            ]);

            // Optionally, you may want to remove the cart items after checkout
            $cart->delete();
        }

        return redirect()->back()->with('success', 'Produk berhasil di-checkout!');
    }
}
