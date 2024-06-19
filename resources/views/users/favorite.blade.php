@extends('layout.main')
@include('partial.navbar')
<div class="container min-h-screen mx-auto py-8 h-auto">
    <div class="w-full flex items-center gap-4 pl-2 my-8">
        <img src="{{ asset('img/favorite.png') }}" alt="" class="w-[30px] h-[30px]">
        <h1 class="font-condensed font-bold text-3xl text-white">Favorite</h1>
    </div>
    <div class="grid grid-cols-3 gap-4">
    @foreach ($favorites as $fav)
        <div class="item mx-2 shadow-lg">
            <div class="bg-[#577399] rounded-lg h-auto text-[#F7F7FF] p-4">
                <a href="{{ route('product.detail', $fav->product->product_id) }}">
                    <img src="{{ asset($fav->product->image_url) }}" alt="{{ $fav->product->name }}" class="w-full h-96 rounded-md">
                </a>
                <div class="flex gap-2 w-full justify-between items-end px-2 py-2">
                    <div class="">
                        <h3 class="text-2xl font-medium mb-2">{{ $fav->product->name }}</h3>
                        <p class="text-lg font-normal">Rp.{{ number_format($fav->product->price, 2) }}</p>
                    </div>
                    <form action="{{ route('favorite.destroy', $fav->favorite_id) }}" method="POST" class="justify-end">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><img src="{{ asset('img/favorite.png') }}" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@include('partial.footer')