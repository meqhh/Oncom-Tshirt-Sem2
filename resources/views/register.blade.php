@extends('layout.main')
    <div class="flex items-center justify-center h-screen ">
        <div class="bg-[#577399] rounded-2xl flex flex-col p-20">
            <div class="w-full text-center items-center justify-center">
                <h1 class="text-white font-bold align-middle w-10 ">REGISTER</h1>
            </div>
            <div class="flex flex-row">
                <div class="w-1/2 p-5">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <form action="POST" class="w-1/2 gap-3 flex flex-col">
                    <div class="w-auto">
                        <p class="text-white font-roboto-condensed">Nama</p>
                        <input type="text" name="" id="" class="w-60 rounded-md h-8 p-2" placeholder="nama">
                    </div>
                    <div class="w-auto">
                        <p class="text-white font-roboto-condensed">Email</p>
                        <input type="email" name="" id="" class="w-60 rounded-md h-8 p-2" placeholder="contoh@domain.com">
                    </div>
                    <div class="w-full">
                        <p class="text-white font-roboto-condensed">Password</p>
                        <input type="password" name="" id="" class="w-60 rounded-md h-8 p-2" placeholder="**********">
                    </div>
                    <div class="w-60 rounded-md h-8 bg-[#FE5F55] text-center items-center justify-center font-bold">
                        <button class=" text-white">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>