@extends('layout.main')
@include('partial.navbar')

    <div class="flex items-center justify-center h-screen px-20 min-h-screen">
        <div class="bg-[#577399] rounded-lg flex flex-row px-20 py-36 justify-center items-center w-auto max-h-fit">
            <div class="flex flex-col w-1/2 min-h-96 gap-24 justify-between">
                <h1 class="text-white font-bold text-3xl">{{ $product->name }}</h1>
                <p class="text-white font-normal text-2xl">{{ $product->description }}</p>

                <div class="flex flex-row">
                    <div class="flex flex-row gap-10">
                        {{-- ukuran  --}}
                        <div class="flex flex-col">
                                <p class="text-xl font-medium text-white">UKURAN</p>
                            <select name="size" id="size">
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-xl font-medium text-white">ALAMAT</p>
                            <input type="text" name="" id="">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-xl font-medium text-white">Jumlah</p>
                        <select name="size" id="size">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-xl font-medium text-white">Pengiriman</p>
                        <select name="size" id="size">
                            <option value="JNT">JNT</option>
                            <option value="JNE">JNE</option>
                            <option value="JNT EXPRESS">JNT EXPRESS</option>
                        </select>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="w-1/2 flex flex-col items-center ">
                <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="w-3/4 rounded-xl">
                <p class="text-4xl font-medium text-white">{{ $product->name }}</p>
            </div>
        </div>
    </div>

@include('partial.footer')
