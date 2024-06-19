<footer class="w-full bg-[#495867] flex-shrink-0 z-30">
    {{-- footer atas --}}
    <div class="flex justify-center items-center pt-8 pb-8 gap-12">
        <a href="/beranda/favorite" class="text-[#FE5F55] font-semibold font-roboto-condensed text-3xl">
            Favorit
        </a>
        <a href="" class="text-[#FE5F55] font-semibold font-roboto-condensed text-3xl">
            Profil
        </a>
        <a href="/beranda/keranjang" class="text-[#FE5F55] font-semibold font-roboto-condensed text-3xl">
            Keranjang
        </a>
        <a href="/contact" class="text-[#FE5F55] font-semibold font-roboto-condensed text-3xl">
            Kontak Kami
        </a>
    </div>
    {{-- line --}}
    <div class="text-[#FE5F55] w-auto h-1 bg-[#FE5F55]"></div>
    {{-- footer bawah --}}
    <div class="flex flex-row px-10 py-4 justify-between align-middle">
        <div>
            <p class="text-[#FE5F55] font-bold font-roboto-condensed text-xl">
                &copy; <script>document.write(new Date().getFullYear())</script> Oncom&trade;. All Rights Reserved.
            </p>
        </div>
        <div class="flex flex-row gap-10">
            <a href="#">
                <img src="{{ asset('img/wa.png') }}" alt="">
            </a>
            <a href="#">
                <img src="{{ asset('img/fb.png') }}" alt="">
            </a>
            <a href="#">
                <img src="{{ asset('img/ig.png') }}" alt="">
            </a>
        </div>
    </div>
</footer>