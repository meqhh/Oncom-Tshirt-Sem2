<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShowController extends Controller
{
    // Controller Show 
    public function index()
    {
        $products = Product::all();
        return view('users.oncom', compact('products'));
    }
    // Controller Detail 
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('users.detail', compact('product'));
    }
}
