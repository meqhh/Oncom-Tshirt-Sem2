@extends('layout.main')
@include('partial.navbar')

<div class="container mx-auto py-7">
    <div class=" bg-blue-100 shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Checkout Success</h1>
        <p class="text-gray-700 mb-4 font-bold">Thank you for your order! Your order has been successfully placed.</p>

        <h2 class="text-lg font-semibold mb-2">Order Summary</h2>
        <div class="overflow-hidden border rounded-lg shadow-md mb-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class=" bg-blue-600">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950 uppercase tracking-wider">Image</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950  uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950  uppercase tracking-wider">Quantity</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950 uppercase tracking-wider">Size</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-950  uppercase tracking-wider">Total</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($cartItems as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ asset($item->product->image_url) }}" alt="{{ $item->product->name }}" class="h-16 w-16 object-cover">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->product->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->quantity }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->size }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">Rp. {{ number_format($item->total_price, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h2 class="text-lg font-semibold mb-2">Shipping Details</h2>
        <div class="bg-gray-100 p-4 rounded-lg mb-6">
            <p class="text-gray-700"><strong>Shipping Address:</strong> {{ $shippingAddress }}</p>
            <p class="text-gray-700"><strong>Shipping Method:</strong> {{ $shippingMethod }}</p>
            <p class="text-gray-700"><strong>Payment Method:</strong> {{ $paymentMethod }}</p>
        </div>

        <a href="{{ route('page') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Continue Shopping</a>
    </div>
</div>


@include('partial.footer')
