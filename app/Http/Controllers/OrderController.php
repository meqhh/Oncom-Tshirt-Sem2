<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use App\Models\Notification; // Tambahkan model Notification

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();
        return view('admin.order.orders', compact('orders'));
    }

    public function userShow($orderId)
    {
    $order = Order::with('orderItems.product')->findOrFail($orderId);
    
    return view('users.order_show', compact('order'));
    }

    public function show($order_id)
    {
        $order = Order::with('items.product')->where('order_id', $order_id)->firstOrFail();
    
        $totalPayment = $order->items->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
    
        return view('admin.order.show', compact('order', 'totalPayment'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        
        if ($request->status === 'processed' && !$order->stock_adjusted) {
            foreach ($order->items as $item) {
                $product = Product::find($item->product_id);
                if ($product) {
                    $product->stock -= $item->quantity;
                    $product->save();
                }
            }
            $order->stock_adjusted = true;
        }

        $order->save();

        // Membuat notifikasi untuk pengguna
        $notification = new Notification();
        $notification->user_id = $order->user_id;
        $notification->title = 'Status Pesanan Diperbarui';
        $notification->message = 'Status pesanan Anda dengan ID ' . $order->order_id . ' telah diperbarui menjadi: ' . $order->status;
        $notification->save();

        return redirect()->route('order', $order->id)->with('success', 'Status pesanan berhasil diperbarui.');
    }
}
