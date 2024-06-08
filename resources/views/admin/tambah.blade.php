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
            <a href="" class="bg-white px-3 py-2 font-bold text-[#FE5F55] rounded-xl text-lg">Tambah Produk +</a>
        </div>
      </div>
      <table class="w-3/4">
        
      </table>
    </div>
</div>
   
@include('partial.footer')