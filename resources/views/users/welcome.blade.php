@extends('layout.main')
@include('partial.navbar')
<section class="bg-cover bg-center h-screen" style="background-image: url('img/welcome.png');">
    <div class="flex items-center justify-center h-full ">
        <div class="text-center flex items-center flex-col">
            <img src="{{ asset('img/logo.png') }}" alt="" class="w-96 h-auto mb-8">
            <h1 class="text-white text-5xl font-bold">Welcome To Oncom Tshirt</h1>
            <p class="text-white text-xl mt-4">Happy Shopping</p>
            <a href="oncom" class="mt-6 inline-block bg-[#FE5F55] text-white px-6 py-3 rounded-full text-lg">Shopping Now</a>
        </div>
    </div>
</section>

<!-- Video Pendek -->
<section class="bg-[#495867] text-white py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10">Temukan Lebih Lanjut Tentang Kami</h2>
        <div class="grid grid-cols-3 gap-12 mb-8">
            <div class="bg-white p-8 rounded shadow">
                <div class="flex flex-row gap-10 w-full items-center justify-center mb-8">
                    <a href="#">
                        <img src="{{ asset('img/wa.png') }}" alt="">
                    </a>
                </div>
                <p class="text-gray-700 font-bold">Whatsapp Kami</p>
            </div>
            <div class="bg-white p-8 rounded shadow">
                <div class="flex flex-row gap-10 w-full items-center justify-center mb-8">
                    <a href="#">
                        <img src="{{ asset('img/fb.png') }}" alt="">
                    </a>
                </div>
                <p class="text-gray-700 font-bold">Facebook</p>
            </div>
            <div class="bg-white p-8 rounded shadow">
                <div class="flex flex-row gap-10 w-full items-center justify-center mb-8">
                    <a href="#">
                        <img src="{{ asset('img/ig.png') }}" alt="">
                    </a>
                </div>
                <p class="text-gray-700 font-bold">Instagram</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Visi Dan Misi</h2>
        <div class="w-full px-12 flex flex-col gap-20">
            <div class="w-full flex flex-row shadow-xl">
                <div class="w-1/4 rounded-xl">
                    <img src="{{ asset('img/4.jpg') }}" alt="">
                </div>
                <div class="w-3/4 p-24 flex items-center justify-center">
                    <h1 class="font-bold text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non enim ipsa rem totam, hic consectetur, magnam quo neque vero eaque voluptates sed cupiditate culpa, impedit atque amet harum nobis corrupti?</h1>
                </div>
            </div>
            <div class="w-full flex flex-row-reverse shadow-xl">
                <div class="w-1/4 rounded-xl">
                    <img src="{{ asset('img/4.jpg') }}" alt="">
                </div>
                <div class="w-3/4 p-24 flex items-center justify-center">
                    <h1 class="font-bold text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non enim ipsa rem totam, hic consectetur, magnam quo neque vero eaque voluptates sed cupiditate culpa, impedit atque amet harum nobis corrupti?</h1>
                </div>
            </div>
            {{-- <div class="w-full flex items-center justify-center">
                <img src="{{ asset('img/welcome.jpg') }}" alt="" class="h-80">
            </div> --}}
            
        </div>
    </div>
</section>
@include('partial.footer')