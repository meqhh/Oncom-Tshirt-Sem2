@extends('layout.main')
@include('partial.navbar')
<div class="flex flex-col min-h-screen ">
    <div class="flex justify-center">
        <div class="flex flex-row-reverse gap-4">
            <input type="text" placeholder="Cari..."
                class="w-96 py-2 pr-1 pl-4 my-5 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-600">
            <button type="submit"
                class=" mt-5 w-24 h-11 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Cari</button>
        </div>
    </div>
    <div class="container mx-auto py-8 h-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Produk 1 -->
            <div class="item mx-2 shadow-lg">
                <div class="bg-white rounded-lg h-auto">
                    <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full h-80">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-700">Rp.170.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 2 -->
            <div class="item mx-2 shadow-lg">
                <div class="bg-white rounded-lg h-auto">
                    <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full h-80">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt Couple</h3>
                        <p class="text-gray-700">Rp.300.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2 shadow-lg">
                <div class="bg-white rounded-lg h-auto">
                    <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full h-80">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 4 -->
            <div class="item mx-2 shadow-lg">
                <div class="bg-white rounded-lg h-auto">
                    <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full h-80">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2 shadow-lg">
                <div class="bg-white rounded-lg h-auto">
                    <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full h-80">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2 shadow-lg">
                <div class="bg-white rounded-lg h-auto">
                    <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full h-80">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2 shadow-lg">
                <div class="bg-white rounded-lg h-auto">
                    <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full h-80">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="item mx-2 shadow-lg">
                <div class="bg-white rounded-lg h-auto">
                    <img src={{ asset('img/7.jpg') }} alt="Produk 1" class="w-full h-80">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">T-shirt unisex</h3>
                        <p class="text-gray-70">Rp.200.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<footer class="">
    @include('partial.footer')
</footer>
