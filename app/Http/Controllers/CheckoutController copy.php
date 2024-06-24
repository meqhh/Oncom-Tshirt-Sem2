<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('checkout.index', compact('carts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengiriman' => 'required|string|max:255',
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'shipping_address' => $request->alamat,
            'shipping_method' => $request->pengiriman,
            'payment_method' => $request->payment_method
        ]);
        
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'size' => $cartItem->size,
                'total_price' => $cartItem->product->price * $cartItem->quantity
            ]);
        }
        
        Cart::where('user_id', Auth::id())->delete();
        
        return view('checkout.checkout-success', [
            'cartItems' => $order->orderItems, // Pastikan orderItems sesuai dengan relasi yang benar
            'shippingAddress' => $order->shipping_address,
            'shippingMethod' => $order->shipping_method,
            'paymentMethod' => $order->payment_method,
        ]);
    }
}
