<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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

    public function checkout()
    {
        $userId = auth()->id();
        $carts = Cart::where('user_id', $userId)->get();

        if ($carts->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang Anda kosong!');
        }

        return view('users.checkout', compact('carts'));
    }

    public function processCheckout(Request $request){
    $user = Auth::user();
    $address = $user->address;

    $request->validate([
        'pengiriman' => 'required|string|max:255',
        'payment_method' => 'required',
        'payment_proof' => 'required_if:payment_method,QRIS|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $order = Order::create([
        'user_id' => auth()->id(),
        'shipping_address' => $address, // Update sesuai dengan kebutuhan
        'shipping_method' => $request->pengiriman, // Update sesuai dengan kebutuhan
        'payment_method' => $request->payment_method,
    ]);

    if ($request->hasFile('payment_proof')) {
        $fileName = time().'.'.$request->payment_proof->extension();
        $request->payment_proof->move(public_path('payment_proofs'), $fileName);
        $order->payment_proof = $fileName;
        $order->save();
    }

    // Pindahkan data dari cart ke order_items
    $carts = Cart::where('user_id', auth()->id())->get();
    foreach ($carts as $cart) {
        OrderItem::create([
            'order_id' => $order->order_id,
            'product_id' => $cart->product_id,
            'quantity' => $cart->quantity,
            'size' => $cart->size,
            'total_price' => $cart->quantity * $cart->product->price,
        ]);
        $cart->delete();
    }

    return redirect()->route('order.show', ['order' => $order->order_id])->with('success', 'Order has been placed successfully.');
    }
}

