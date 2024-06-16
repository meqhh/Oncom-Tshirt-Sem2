<nav class="sticky top-0 z-10">
    <div class="flex flex-row justify-between px-10 py-2 bg-[#577399]">
        <div class="w-64">
            <a href="{{ url('/') }}"><img class="w-100" src="{{ asset('img/logonav.png')}}" alt="Logo"></a>
        </div>
        <div class="w-50 flex flex-row gap-7 align-middle justify-center px-10 py-3">
            <a href="#">
                <img class="w-8" src="{{ asset('img/love.png') }}" alt="Love">
            </a>
            <a href="">
                <img class="w-8" src="{{ asset('img/cart.png') }}" alt="Cart">
            </a>
            <a href="#">
                <img class="w-8" src="{{ asset('img/contact.png') }}" alt="Contact">
            </a>
            @auth
                <span class="text-[#FE5F55] font-bold font-roboto-condensed text-3xl">
                    {{ Str::limit(Auth::user()->name, 8) }}
                </span>
                <a href="#">
                    <img class="w-8" src="{{ asset('img/user.png') }}" alt="User">
                </a>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="text-[#FE5F55] font-bold font-roboto-condensed text-3xl">
                    Login
                </a>
            @endguest
        </div>
    </div>
</nav>
