
@extends('layout.main')
@include('partial.navbar')
    <div class="grid grid-cols-3 gap-2 py-40 px-10">
    <div class="border p-4 bg-white">
        <img src="{{asset('img/img1.png')}}" alt="img1.png" class="w-full mb-4">
        <h2 class="text-lg font-semibold">T-shirt Unisex</h2>
        <p class="text-gray-700 ">Harga: Rp. 179.000</p>
        <img src="{{asset('img/like.png')}}" alt="...">
    </div>
    <div class="border p-4 bg-white">
        <img src="{{asset('img/img2.png')}}" alt="img1.png" class="w-full mb-4">
        <h2 class="text-lg font-semibold">T-shirt Unisex</h2>
        <p class="text-gray-700">Harga: Rp. 179.000</p>
        <img src="{{asset('img/like.png')}}" alt="..." class="float-left mr-4">
    </div>
    <div class="border p-4 bg-white">
        <img src="{{asset('img/img3.png')}}" alt="img1.png" class="w-full mb-4">
        <h2 class="text-lg font-semibold">T-shirt Unisex</h2>
        <p class="text-gray-700">Harga: Rp. 179.000</p>
        <img src="{{asset('img/like.png')}}" alt="..." class="float-left mr-4">
    </div>
    <div class="border p-4 bg-white">
        <img src="{{asset('img/img4.png')}}" alt="img1.png" class="w-full mb-4">
        <h2 class="text-lg font-semibold">T-shirt Unisex</h2>
        <p class="text-gray-700">Harga: Rp. 179.000</p>
        <img src="{{asset('img/like.png')}}" alt="..." class="float-left mr-4">
    </div>
    <div class="border p-4 bg-white">
        <img src="{{asset('img/img5.png')}}" alt="img1.png" class="w-full mb-4">
        <h2 class="text-lg font-semibold">T-shirt Unisex</h2>
        <p class="text-gray-700">Harga: Rp. 179.000</p>
        <img src="{{asset('img/like.png')}}" alt="..." class="float-left mr-4">
    </div>
    <div class="border p-4 bg-white">
        <img src="{{asset('img/img6.jpg')}}" alt="img1.png" class="w-full mb-4">
        <h2 class="text-lg font-semibold">T-shirt Unisex</h2>
        <p class="text-gray-700">Harga: Rp. 179.000</p>
        <img src="{{asset('img/like.png')}}" alt="..." class="float-left mr-4">
    </div>
</div>
</div>
@include('partial.footer')