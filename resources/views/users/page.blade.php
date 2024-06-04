@extends('layout.main')
@include('partial.navbar')

    <div class="flex items-center justify-center h-screen p-10">
        <div class="bg-[#577399] rounded-lg flex flex-row p-20 justify-center items-center w-auto ">
            <div class="flex flex-col w-1/2">
                <h1>DESKRIPSI</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic atque impedit quo voluptatem commodi ad sequi! Doloremque commodi exercitationem, soluta, placeat, laborum odio quisquam enim possimus eius numquam magnam facilis!</p>

                <div class="flex flex-row">
                    <div class="flex flex-row gap-10">
                        <div class="flex flex-col">
                            <p>UKURAN</p>
                        <select name="size" id="size">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        </div>
                        <div class="flex flex-col">
                            <p>ALAMAT</p>
                            <input type="text" name="" id="">
                        </div>
                        <div class="flex flex-col">
                            <p>Jumlah</p>
                        <select name="size" id="size">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        </div>
                        <div class="flex flex-col">
                            <p>Pengiriman</p>
                        <select name="size" id="size">
                            <option value="JNT">JNT</option>
                            <option value="JNE">JNE</option>
                            <option value="JNT EXPRES">JNT EXPRES</option>
                        </select>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="w-1/2">
                <img src="{{asset ('img/baju.png')}}" alt="">
                <p>BAJU UNISEX</p>
            </div>
        </div>
    </div>

@include('partial.footer')
