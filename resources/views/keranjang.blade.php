@extends('layout.main')
@include('partial.navbar')
<div class="py-40 px-10">
    <div class="bg-white">
<div class="grid grid-cols-6 gap-4 bg-white h-8 border-b border-gray border-black">
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-xl">ID</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-xl">Gambar</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-xl">Nama Produk</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-xl">Jumlah</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-xl">Stok</p></div>

</div>
<div class="grid grid-cols-6 gap-4 m-5">
    <div class="col-span-1">1</div>
    <div class="col-span-1"><img src="{{asset('img/img1.png')}}" alt="img1.png" class="w-full mb-4"></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">T-Shirt</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">20</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">30</p></div>
</div>
<div class="grid grid-cols-6 gap-4 m-5">
    <div class="col-span-1">2</div>
    <div class="col-span-1"><img src="{{asset('img/img2.png')}}" alt="img2.png" class="w-full mb-4"></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">T-Shirt</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">20</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">30</p></div>
</div>
<div class="grid grid-cols-6 gap-4 m-5">
    <div class="col-span-1">3</div>
    <div class="col-span-1"><img src="{{asset('img/img3.png')}}" alt="img3.png" class="w-full mb-4"></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">T-Shirt</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">20</p></div>
    <div class="col-span-1"><p class="text-xs sm:text-lg xl:text-l">30</p></div>
</div>

</div>
</div>
@include('partial.footer')