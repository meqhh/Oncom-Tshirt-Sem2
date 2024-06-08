@extends('layout.main')
<section class="bg-[#BDD5EA]">
    {{-- container --}}
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        {{-- logo web --}}
        <a href="{{ asset ('/') }}" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{ asset ('img/logo.png') }}" alt="logo">  
        </a>
        {{-- Login --}}
        <div class="w-full bg-[#577399] rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                {{-- Form Login --}}
                <h1 class=" text-center font-roboto-condensed text-3xl xl:text-4xl font-bold leading-tight tracking-tight text-white items-center justify-center">LOGIN</h1>
                {{-- form --}}
                <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                @csrf
                    {{-- email --}}
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="contoh@domain.com" required="">
                        @error('email')
                             <span class="text-red-500 text-sm font-size: 68px">Incorrect Username atau Password </span>
                        @enderror
                    </div>
                    {{-- password  --}}
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    {{-- Penawaran register --}}
                    <div class="flex items-center justify-end">
                        <p class="text-sm font-medium font-roboto-condensed text-white">Belum terdaftar?  </p>  <a href="register" class="text-sm font-roboto-condensed font-medium text-[#FE5F55] hover:underline" >Daftar</a>
                    </div>
                    <button type="submit" name="submit" class="w-full text-white bg-[#FE5F55] hover:bg-[#d94a41] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</section>