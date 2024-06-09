@extends('layout.main')
@include('partial.navbar')
<style>
  #image_preview {
            display: none;
        }
</style>
<div class="w-full flex flex-row min-h-screen">
    <div class="w-1/4">
        @include('components.adminpanel')
    </div>
    <div class="w-3/4 flex content-center flex-col items-center py-20">
        <div class="mb-10 w-full"><h1 class="font-bold text-white text-2xl">Edit Produk</h1></div>
        {{-- container input  --}}
        <form class="mb-4 w-full grid grid-cols-2 gap-8 pr-20" action="{{ route('product.update', $product->product_id) }}" method="POST" enctype="multipart/form-data">
          @csrf
            {{-- input nama  --}}
            <div class="w-full mb-8">
              <h2 class="text-[#FE5F55] font-bold text-xl mb-2 ">
                Nama
              </h2>
              <input type="text" name="name" value="{{ $product->name }}" class="w-full auto p-3 rounded-md font-semibold" placeholder="Nama Produk"> 
            </div>
            {{-- input harga --}}
            <div class="w-full mb-8">
              <h2 class="text-[#FE5F55] font-bold text-xl mb-2">
                Harga
              </h2>
              <input type="text" name="price" value="{{ $product->price }}" class="w-full auto p-3 rounded-md font-semibold" id="rupiah_input" type="text" placeholder="Rp" oninput="formatRupiah(this)">
            </div>
            {{-- input deskripsi --}}
            <div class="w-full">
              <h2 class="text-[#FE5F55] font-bold text-xl mb-2">
                Deskripsi
              </h2>
              <textarea name="description" id="" cols="30" rows="10" class="w-full auto p-3 rounded-md font-semibold" placeholder="Deskripsi Produk">{{ $product->description }}</textarea>
            </div>
            {{-- input stok --}}
            <div class="w-full">
              <h2 class="text-[#FE5F55] font-bold text-xl mb-2">
                Stok
              </h2>
              <input type="number" name="stock" value="{{ $product->stock }}" class="w-full auto p-3 rounded-md font-semibold" placeholder="Jumlah Stok Produk">
            </div>
            {{-- input gambar --}}
            <div class="w-full">
              <input class="block w-full text-sm mb-2" id="file_input" name="image_url" type="file" accept="image/*" onchange="previewImage(event)">
              <img id="image_preview" class="w-1/2 rounded-lg" src="{{ asset($product->image_url) }}" />
              <button type="submit" class="text-[#FE5F55] font-bold text-xl mb-2 mt-6 mr-4 py-1 px-4 rounded-md bg-white">
                Update Produk
              </button>
              <form action="{{ route('product.destroy', $product->product_id) }}" method="POST">
                @csrf
                @method('DELETE')
              <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')" class="text-[#FE5F55] font-bold text-xl mb-2 mt-6 py-1 px-4 rounded-md bg-white">Hapus Produk</button>
              </form>
            </div>
        </form>
      
    </div>
</div>
<script>
  function previewImage(event) {
      var reader = new FileReader();
      reader.onload = function(){
          var output = document.getElementById('image_preview');
          output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
  }
</script>
@include('partial.footer')