@extends('layout.main')
@include('partial.navbar')
<div class="w-full min-h-screen flex content-center flex-col items-center py-20 px-40">
    <div class="mb-4 w-full">
        <h1 class="font-bold text-white text-2xl">
            List User
        </h1>
    </div>
    <table class="w-full">
        <thead class="bg-white border-b border-black">
            <tr class="w-6">
                <th class="px-6 py-2">ID</th>
                <th class="px-2 py-2">Gambar</th>
                <th class="px-6 py-2">Nama Produk</th>
                <th class="px-6 py-2">Harga</th>
                <th class="px-6 py-2">Jumlah</th>
                <th class="px-6 py-2">Stok</th>
                <th class="px-6 py-2">Hapus</th>
                <th class="px-6 py-2">Checkout</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($carts as $cart)
                <tr class="bg-gray-100">
                    <td class="px-4 py-2 text-center">{{ $cart->product->product_id }}</td>
                    <td class="px-2 py-2 flex justify-center">
                        <img src="{{ asset($cart->product->image_url) }}" class="w-32 h-32 object-cover" alt="{{ $cart->product->name }}">
                    </td>
                    <td class="px-4 py-2 text-center">{{ $cart->product->name }}</td>
                    <td class="px-4 py-2 text-center">Rp.{{ number_format($cart->product->price, 2) }}</td>
                    <td class="px-4 py-2 text-center">{{ $cart->quantity }}</td>
                    <td class="px-4 py-2 text-center">{{ $cart->product->stock }}</td>
                    <td class="px-4 py-2 text-center font-bold text-[#FE5F55] text-3xl">
                        <form action="{{ route('cart.destroy', $cart->cart_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">-</button>
                        </form>
                    </td>
                    <td class="px-4 py-2 text-center">
                        <input type="checkbox" name="checkout[]" value="{{ $cart->cart_id }}">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="w-full">
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <button class="text-[#FE5F55] font-bold text-xl mb-2 mt-6 py-1 px-4 rounded-md bg-white" type="submit">
                Checkout
            </button>
        </form>
    </div>
</div>
@include('partial.footer')