@extends('layout.main')
@include('partial.navbar')
<div class="w-full flex flex-row min-h-screen">
    <div class="w-1/4">
        @include('components.adminpanel')
    </div>
    <div class="container mx-auto px-8 py-20">
        <h1 class="text-2xl font-bold mb-4 text-white">Order {{ $order->order_id }}</h1>
        <div class="rounded-lg">
            <h2 class="text-lg font-semibold mb-2 text-white">{{ $order->user->name }}</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-center">
                    <thead class="bg-white">
                        <tr>
                            <th class="py-3 text-black text-xs font-medium text-slate-950 uppercase tracking-wider">Image</th>
                            <th class="py-3 text-black text-xs font-medium text-slate-950 uppercase tracking-wider">Name</th>
                            <th class="py-3 text-black text-xs font-medium text-slate-950 uppercase tracking-wider">Quantity</th>
                            <th class="py-3 text-black text-xs font-medium text-slate-950 uppercase tracking-wider">Size</th>
                            <th class="py-3 text-black text-xs font-medium text-slate-950 uppercase tracking-wider">Total</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($order->items as $item)
                        <tr>
                            <td class="py-4">
                                <img src="{{ asset($item->product->image_url) }}" alt="{{ $item->product->name }}" class="h-16 w-16 object-cover mx-auto">
                            </td>
                            <td class="py-4">{{ $item->product->name }}</td>
                            <td class="py-4">{{ $item->quantity }}</td>
                            <td class="py-4">{{ $item->size }}</td>
                            <td class="py-4">Rp. {{ number_format($item->total_price, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" class="min-w-full divide-y divide-gray-200 text-center py-4"><strong>Total Payment</strong></td>
                            <td class="py-4 min-w-full divide-y divide-gray-200 text-center"><strong>Rp. {{ number_format($totalPayment, 0, ',', '.') }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            <h2 class="text-lg text-white font-semibold mt-6">Detail Pengiriman</h2>
            <p><strong class="text-2lg text-white font-semibold mt-6">Shipping Address:</strong> {{ $order->shipping_address }}</p>
            <p><strong class="text-2lg text-white font-semibold mt-6">Shipping Method:</strong> {{ $order->shipping_method }}</p>
            <p><strong class="text-2lg text-white font-semibold mt-6">Payment Method:</strong> {{ $order->payment_method }}</p>
            @if($order->payment_proof)
                <div class="mb-4">
                    {{-- <label class="block text-sm font-medium text-gray-700">Payment Proof</label> --}}
                    <img src="{{ asset('payment_proofs/' . $order->payment_proof) }}" alt="Payment Proof" class="w-56 h-auto mt-1">
                </div>
            @endif
    
            <h2 class="text-lg font-semibold mt-6 text-white">Status Pesanan</h2>
            <form action="{{ route('order.updateStatus', $order->order_id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <select name="status" id="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="processed" {{ $order->status == 'processed' ? 'selected' : '' }}>Processed</option>
                        <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Update Status</button>
            </form>
        </div>
    </div>
    </div>
</div>
<footer class="mt-auto">
    @include('partial.footer')
</footer>

