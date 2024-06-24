@extends('layout.main')
@include('partial.navbar')

<div class="container mx-auto py-7 min-h-screen">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold mb-4 text-white">Total Orderan</h2>
                <div class="overflow-hidden border rounded-lg shadow-md">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-white">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-black uppercase tracking-wider">Image</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-black uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-black uppercase tracking-wider">Quantity</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-black uppercase tracking-wider">Size</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-black uppercase tracking-wider">Total</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($order->orderItems as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="{{ asset($item->product->image_url) }}" alt="{{ $item->product->name }}" class="h-16 w-16 object-cover">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->product->name }}</td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">{{ $item->quantity }}</td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">{{ $item->size }}</td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">Rp.{{ number_format($item->total_price, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold mb-4 text-white">Shipping & Payment Details</h2>
                <div class="bg-white shadow-md rounded-lg p-4">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Shipping Address</label>
                        <p class="mt-1 text-gray-800">{{ $order->shipping_address }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Shipping Method</label>
                        <p class="mt-1 text-gray-800">{{ $order->shipping_method }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Payment Method</label>
                        <p class="mt-1 text-gray-800">{{ $order->payment_method }}</p>
                    </div>
                @if($order->payment_proof)
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Payment Proof</label>
                        <img src="{{ asset('payment_proofs/' . $order->payment_proof) }}" alt="Payment Proof" class="w-full h-auto mt-1">
                    </div>
                @endif
                </div>
            </div>
        </div>
</div>

@include('partial.footer')
