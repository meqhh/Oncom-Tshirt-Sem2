@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Keranjang Belanja</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($carts->isEmpty())
            <p>Keranjang belanja Anda kosong.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Ukuran</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carts as $cart)
                        <tr>
                            <td>{{ $cart->product->name }}</td>
                            <td>{{ $cart->size }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>{{ $cart->product->price * $cart->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection