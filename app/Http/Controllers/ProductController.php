<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create(){
        return view('admin.tambah');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image_url'] = 'images/' . $imageName;
        }

        Product::create($validatedData);

        return redirect()->back()->with('success', 'Product created successfully.');
    }
    public function index()
    {
        $products = Product::all();
        return view('admin.list_produk', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.editproduk', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image_url'] = 'images/' . $imageName;
        } else {
            unset($validatedData['image_url']);
        }

        $product->update($validatedData);

        return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
    
        // Hapus entri terkait di tabel order_items terlebih dahulu
        OrderItem::where('product_id', $id)->delete();
    
        // Hapus entri terkait di tabel carts
        Cart::where('product_id', $id)->delete();
    
        // Hapus gambar terkait jika ada
        if ($product->image_url) {
            // Dapatkan nama file dari URL gambar
            $filename = $product->image_url;
            // Hapus file dari penyimpanan publik
            Storage::delete('public/' . $filename);
        }
    
        // Kemudian hapus produk
        $product->delete();
    
        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus');
    }

}
