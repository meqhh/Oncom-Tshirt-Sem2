@extends('layout.main')
@include('partial.navbar')

<div class="w-full flex flex-row">
    <div class="w-1/4">
        @include('components.adminpanel')
    </div>
    <div class="w-3/4 flex content-center flex-col items-center py-20">
      <div class="mb-4 w-3/4"><h1 class="font-bold text-white text-2xl">Pesanan Terkirim</h1></div>
      <table class="w-3/4">
        <thead class="bg-white">
            <tr class="w-6">
                <th class="px-6 py-2">ID Produk</th>
                <th class="px-10 py-2">Gambar</th>
                <th class="px-16 py-2">Nama Produk</th>
                <th class="px-6 py-2">Jumlah</th>
                <th class="px-20 py-2">Alamat</th>
                <th class="px-10 py-2">Size</th>
                <th class="px-10 py-2">Pengiriman</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr class="bg-gray-100">
                <td class="px-4 py-2 text-center">1</td>
                <td class="px-4 py-2 flex justify-center"><img src="{{ asset('img/welcome.jpg') }}" alt="" class="w-32 h-32 object-cover"></td>
                <td class="px-4 py-2 text-center">T-shirt</td>
                <td class="px-4 py-2 text-center">1</td>
                <td class="px-4 py-2 text-center">At vero eos et accusamus et iusto...</td>
                <td class="px-4 py-2 text-center">L</td>
                <td class="px-4 py-2 text-center">JNE</td>
            </tr>
        </tbody>
      </table>
    </div>
</div>
   
@include('partial.footer')