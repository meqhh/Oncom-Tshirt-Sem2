@extends('layout.main')
@include('partial.navbar')
<div>
    <div class="flex justify-center">
        <div class="flex flex-row-reverse">
            <input type="text" placeholder="Cari..."
                class="w-full py-2 pr-1 pl-4 my-5 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-600">
            <button type="submit"
                class="right-60 mt-2  w-7 h-9  px-3 py-1  bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Cari</button>
        </div>
    </div>
    <div class="container mx-auto py-8 h-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Produk 1 -->
            <div class="item mx-2">
                <div class="box bg-white rounded-lg overflow-hidden shadow-md">
                    {{-- <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full"> --}}
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-700">Rp.170.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 2 -->
            <div class="item mx-2">
                <div class="box bg-white rounded-lg overflow-hidden shadow-md">
                    {{-- <img src={{ asset('img/9.jpg') }} alt="Produk 2" class="w-full"> --}}
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt Couple</h3>
                        <p class="text-gray-700">Rp.300.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2">
                <div class="box bg-white rounded-lg overflow-hidden shadow-md">
                    {{-- <img src={{ asset('img/16.jpg') }} alt="Produk 3" class="w-full"> --}}
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 4 -->
            <div class="item mx-2">
                <div class="box bg-white rounded-lg overflow-hidden shadow-md">
                    {{-- <img src={{ asset('img/20.jpg') }} alt="Produk 3" class="w-full"> --}}
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2">
                <div class="box bg-white rounded-lg overflow-hidden shadow-md">
                    {{-- <img src={{ asset('img/9.jpg') }} alt="Produk 3" class="w-full"> --}}
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2">
                <div class="box bg-white rounded-lg overflow-hidden shadow-md">
                    {{-- <img src={{ asset('img/7.jpg') }} alt="Produk 3" class="w-full"> --}}
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2">
                <div class="box bg-white rounded-lg overflow-hidden shadow-md">
                    {{-- <img src={{ asset('img/9.jpg') }} alt="Produk 3" class="w-full"> --}}
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2">
                <div class="box bg-white rounded-lg overflow-hidden shadow-md">
                    {{-- <img src={{ asset('img/13.jpg') }} alt="Produk 3" class="w-full"> --}}
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@include('partial.footer')
