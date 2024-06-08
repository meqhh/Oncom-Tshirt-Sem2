@extends('layout.main')
@include('partial.navbar')

<div class="w-full flex flex-row">
    <div class="w-1/4">
        @include('components.adminpanel')
    </div>
    <div class="w-3/4 flex content-center flex-col items-center py-20">
      <div class="mb-4 w-3/4"><h1 class="font-bold text-white text-2xl">List Produk</h1></div>
      <div class="mb-4 w-3/4 rounded-xl">
        <div class="w-auto rounded-xl">
            <a href="tambah" class="bg-white px-3 py-2 font-bold text-[#FE5F55] rounded-xl text-lg">Tambah Produk +</a>
        </div>
      </div>
      <table class="w-3/4">
        <thead class="bg-white border-b-2 border-gray-300">
            <tr class="w-6">
                <th class="px-6 py-2">ID Produk</th>
                <th class="px-10 py-2">Gambar</th>
                <th class="px-16 py-2">Nama Produk</th>
                <th class="px-6 py-2">Harga</th>
                <th class="px-20 py-2">Deskripsi</th>
                <th class="px-10 py-2">Stok</th>
                <th class="px-10 py-2"></th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr class="bg-gray-100">
                <td class="px-4 py-2 text-center">1</td>
                <td class="px-4 py-2 flex justify-center"><img src="{{ asset('img/welcome.jpg') }}" alt="" class="w-32 h-32 object-cover"></td>
                <td class="px-4 py-2 text-center">T-shirt</td>
                <td class="px-4 py-2 text-center">Rp. 140.000</td>
                <td class="px-4 py-2 text-center">At vero eos et accusamus et iusto...</td>
                <td class="px-4 py-2 text-center">10</td>
                <td class="px-4 py-2 text-center"><button class="text-[#FE5F55] underline font-bold">Edit</button></td>
            </tr>
        </tbody>
      </table>
    </div>
</div>
   
@include('partial.footer')