@extends('layout.main')
@include('partial.navbar')

<div class="container mx-auto py-7 min-h-screen">
    <h1 class="text-2xl font-bold mb-4 text-white">Checkout</h1>
    <form action="{{ route('cart.processCheckout') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-red-100 shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div class="flex flex-col">
                    <h2 class="text-lg font-semibold mb-2">Order Summary</h2>
                    <div class="overflow-hidden border rounded-lg shadow-md">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-blue-500">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950 uppercase tracking-wider">Image</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950 uppercase tracking-wider">Quantity</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950 uppercase tracking-wider">Size</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950 uppercase tracking-wider">Total</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($carts as $cart)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <img src="{{ asset($cart->product->image_url) }}" alt="{{ $cart->product->name }}" class="h-16 w-16 object-cover">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $cart->product->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $cart->quantity }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $cart->size }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Rp.{{ number_format($cart->quantity * $cart->product->price, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex flex-col">
                    <h2 class="text-lg font-semibold mb-2">Shipping Details</h2>
                    <div class="bg-blue-500 shadow-md rounded-lg p-4">
                        <div class="mb-4">
                            <label for="pengiriman" class="block text-sm font-medium text-gray-700">Pengiriman</label>
                            <select name="pengiriman" id="pengiriman" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="JNT">JNT</option>
                                <option value="JNE">JNE</option>
                                <option value="JNT EXPRESS">JNT EXPRESS</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="payment_method" class="block text-sm font-medium text-gray-700">Payment Method</label>
                            <select name="payment_method" id="payment_method" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="COD">COD</option>
                                <option value="QRIS">QRIS</option>
                            </select>
                        </div>
                        <div id="qris-container" class="mb-4 hidden">
                            <img src="{{ asset('img/qris.png') }}" alt="QRIS" class="w-48 h-48 object-cover mx-auto">
                            <label for="payment_proof" class="block text-sm font-medium text-gray-700 mt-4">Upload Payment Proof</label>
                            <input type="file" name="payment_proof" id="payment_proof" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Proceed to Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@include('partial.footer')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const paymentMethodSelect = document.getElementById('payment_method');
    const qrisContainer = document.getElementById('qris-container');

    paymentMethodSelect.addEventListener('change', function() {
        if (this.value === 'QRIS') {
            qrisContainer.classList.remove('hidden');
        } else {
            qrisContainer.classList.add('hidden');
        }
    });
});
</script>
