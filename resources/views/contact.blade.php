@extends('layout.main')
@include('partial.navbar')
<section class="bg-[#BDD5EA]">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="{{ asset ('/') }}" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            
        <div class="w-full bg-[#577399] rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-7 space-y-4 md:space-y-50 sm:p-20">
                <div class="flex items-center">
                </div>
                <h1 class=" text-center font-roboto-condensed text-3xl xl:text-4xl font-bold leading-tight tracking-tight text-white items-center justify-center">
                    kontak kami 
                </h1>
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                    </div>
                    <h1 class=" text-center font-roboto-condensed text-3xl xl:text-4xl font-bold leading-tight tracking-tight text-white items-center justify-center">
                        <div class="flex items-center">
                        <img src={{ asset('img/wa.png') }} class="h-6 w-6 mr-2">
                        <p class="text-xl">08123456781</p>  
                    </h1>
                    <h1 class=" text-center font-roboto-condensed text-3xl xl:text-4xl font-bold leading-tight tracking-tight text-white items-center justify-center">
                        <div class="flex items-center">
                        <img src={{ asset('img/fb.png') }} class="h-6 w-6 mr-2">
                        <p class="text-xl">Oncom T-shirt</p>  
                    </h1>
                <h1 class=" text-center font-roboto-condensed text-3xl xl:text-4xl font-bold leading-tight tracking-tight text-white items-center justify-center">
                    <div class="flex items-center">
                    <img src={{ asset('img/ig.png') }} class="h-6 w-6 mr-2">
                    <p class="text-xl">@oncom.store</p>  
                </h1>
                </form>
            </div>
        </div>
    </div>
  </section>

@include('partial.footer')