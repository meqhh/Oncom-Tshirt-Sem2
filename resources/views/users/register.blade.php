@extends('layout.main')
<div class="flex items-center justify-center h-screen ">
    <div class="bg-[#577399] rounded-2xl flex flex-col p-14">
        {{-- Text register --}}
        <div class="w-full text-center items-center justify-center mb-8">
            <h1 class="text-white font-bold align-middle text-center text-3xl">REGISTER</h1>
        </div>
        {{-- container form --}}
        <div class="flex flex-row justify-center h-auto min-h-80 gap-16 px-8">
            {{-- Logo web --}}
            <div class="w-1/2 h-96 flex justify-center items-center">
                <img src="{{ asset('img/logo.png') }}" alt="" class="w-full h-auto">
            </div>
            {{-- form register --}}
            <form action="/registrasi" method="post" class="w-1/2 gap-4 flex flex-col pl-2">
                @csrf
                {{-- Input nama --}}
                <div class="w-auto">
                    <p class="text-white font-roboto-condensed pb-1">Name</p>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-60 rounded-md h-8 p-2" placeholder="name">
                </div>
                {{-- Input address  --}}
                <div class="w-auto">
                    <p class="text-white font-roboto-condensed pb-1">Address</p>
                        <input type="address" name="address" id="address" value="{{ old('address') }}" class="w-60 rounded-md h-8 p-2" placeholder="address">
                </div>
                {{-- Input tanggal lahir --}}
                <div class="w-auto">
                    <p class="text-white font-roboto-condensed pb-1">Date of Birth</p>
                    <input type="date" class="w-60 rounded-md h-8 p-2" placeholder="DD/MM/YYY" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                </div>
                {{-- input email --}}
                <div class="w-auto flex flex-col">
                    <p class="text-white font-roboto-condensed pb-1">Email</p>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-60 rounded-md h-8 p-2" placeholder="example@domain.com">
                    @error('email')
                    <span class="text-red-500 text-sm">{{"Email already in use"}}</span>
                    @enderror
                </div>
                {{-- Input password  --}}
                <div class="w-full">
                    <p class="text-white font-roboto-condensed pb-1">Password</p>
                    <input type="password" name="password" id="password" class="w-60 rounded-md h-8 p-2" placeholder="**********">
                    @if(session()->has('registerError'))
                    <div class="text-red-600">
                        {{ session('registerError') }}
                    </div>
                    @endif
                </div>
                {{-- Re-enter password  --}}
                <div class="w-full">
                    <p class="text-white font-roboto-condensed pb-1">Re-Enter Password</p>
                    <input type="password" placeholder="Re-password" id="Re-password" class="w-60 rounded-md h-8 p-2" name="repassword">
                </div>
                {{-- button register --}}
                <button class="text-white">
                    <div class="w-60 rounded-md h-10 pt-1 bg-[#FE5F55] text-center items-center justify-center font-bold">  
                        Register   
                    </div>
                </button>
            </form>
        </div>
    </div>
</div>                   