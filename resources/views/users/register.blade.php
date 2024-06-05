@extends('layout.main')
    <div class="flex items-center justify-center h-screen ">
        <div class="bg-[#577399] rounded-2xl flex flex-col p-20">
            <div class="w-full text-center items-center justify-center">
                <h1 class="text-white font-bold align-middle text-center">REGISTER</h1>
            </div>
            <div class="flex flex-row">
                <div class="w-1/2 p-5">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <form action="/registrasi" method="post" class="w-1/2 gap-3 flex flex-col">
                    @csrf
                    <div class="w-auto">
                        <p class="text-white font-roboto-condensed">Name</p>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-60 rounded-md h-8 p-2" placeholder="name">
                    </div>

                    <div class="w-auto">
                        <p class="text-white font-roboto-condensed">Address</p>
                        <input type="address" name="address" id="address" value="{{ old('address') }}" class="w-60 rounded-md h-8 p-2" placeholder="address">
                    </div>

                    <div class="w-auto">
                    <p class="text-white font-roboto-condensed">Date of Birth</p>
                    <input type="date" class="w-60 rounded-md h-8 p-2" placeholder="DD/MM/YYY" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                
                </div>
                 <div class="w-auto">
                        <p class="text-white font-roboto-condensed">Email</p>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-60 rounded-md h-8 p-2" placeholder="example@domain.com">
                        @error('email')
                    <span class="text-red-500 text-sm">{{"Email already in use"}}</span>
                @enderror
                    </div>
                    <div class="w-full">
                        <p class="text-white font-roboto-condensed">Password</p>
                        <input type="password" name="password" id="password" class="w-60 rounded-md h-8 p-2" placeholder="**********">
                        @if(session()->has('registerError'))
                        <div class="text-red-600">
                            {{ session('registerError') }}
                        </div>
                        @endif
                </div>
                <div class="w-full">
                <p class="text-white font-roboto-condensed">Repassword</p>
                <input type="password" placeholder="Re-password" id="Re-password" class="w-60 rounded-md h-8 p-2" name="repassword">
                </div>
                <input type="hidden" name="status" value="user" id="">
                    <div class="w-60 rounded-md h-8 bg-[#FE5F55] text-center items-center justify-center font-bold">
                        <button class=" text-white">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

                    