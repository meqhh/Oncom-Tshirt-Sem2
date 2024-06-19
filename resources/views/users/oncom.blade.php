@extends('layout.main')
@include('partial.navbar')
<div class="flex flex-col min-h-screen ">
    <div class="flex justify-center">
        <div class="flex flex-row-reverse gap-4">
            <input type="text" placeholder="Cari..." class="w-96 py-2 pr-1 pl-4 my-5 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-600">
            <button type="submit" class=" mt-5 w-24 h-11 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                Cari
            </button>
        </div>
    </div>
    <div class="container mx-auto py-8 h-auto">
        <div class="grid grid-cols-3 gap-4">
            @foreach($products as $product)
                <div class="item mx-2 shadow-lg">
                    <div class="bg-[#577399] rounded-lg h-auto text-[#F7F7FF] p-4">
                        <a href="{{ route('product.detail', $product->product_id) }}">
                            <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-96 rounded-md">
                        </a>
                        <div class="p-4">
                            <h3 class="text-2xl font-medium mb-2">{{ $product->name }}</h3>
                            <p class="text-lg font-normal">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>




<footer class="">
    @include('partial.footer')
</footer>
