@extends('layout.main')
@include('partial.navbar')

    <div class="flex items-center justify-center h-auto px-48 min-h-screen ">
        <div class="bg-[#577399] rounded-lg flex flex-row px-16 py-16 justify-between items-center w-full h-auto">
            <div class="flex flex-col w-1/2 min-h-96 gap-8 justify-between">
                <div class="grid gap-8 w-full">
                    <h1 class="text-white font-bold text-3xl">{{ $product->name }}</h1>
                    <p class="text-white font-normal text-2xl text-left">{{ $product->description }} </p>
                </div>
                <form action="{{ route('cart.store') }}" method="POST" class="grid grid-cols-2 gap-4 pr-8" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                    {{-- ukuran  --}}
                    <div class="flex flex-col gap-2">
                        <p class="text-xl font-medium text-white">UKURAN</p>
                        <select class="w-1/2" name="size" id="size">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    {{-- Jumlah --}}
                    <div class="flex flex-col gap-2">
                        <p class="text-xl font-medium text-white">Jumlah</p>
                        <select class="w-1/2" name="quantity" id="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    {{-- Pengiriman --}}
                    <div class="flex flex-col gap-2">
                        <p class="text-xl font-medium text-white">Pengiriman</p>
                        <select class="w-1/2" name="shipping" id="shipping">
                            <option value="JNT">JNT</option>
                            <option value="JNE">JNE</option>
                            <option value="JNT EXPRESS">JNT EXPRESS</option>
                        </select>
                    </div>
                    {{-- button fav dan cart --}}
                    <div class="w-1/2 flex gap-4 pt-8">
                        <button type="submit" class=""><img src="{{ asset('img/cart.png') }}" alt=""></button>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                    @foreach ($errors->all() as $error)
                            <li class="text-red-700 font-bold text-2xl">{{ $error }}</li>
                    @endforeach
                        </ul>
                    </div>
                    @endif
                </form>
            </div>
            {{-- container foto  --}}
            <div class="w-1/3 flex flex-col items-center ">
                <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="w-full rounded-xl max-h-80">
                <p class="text-4xl font-medium text-white">{{ $product->name }}</p>
            </div>
        </div>
    </div>
    
@include('partial.footer')
