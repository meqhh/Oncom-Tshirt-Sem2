@extends('layout.main')

@include('partial.navbar')

<div class="">
    
    <style>
          /* CSS untuk memindahkan tabel ke tengah dengan flexbox */
    .center-table {
        display: flex;
        justify-content: center;
    }
    /* Styling untuk tabel */
    table {
        width: 50%; /* Lebar tabel */
    }
    table {
        width: 50%; /* Lebar tabel di dalam parent (80% dari parent karena menggunakan .center-table) */
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
   
    </style>
    </head>
    <body>
    
    <h1><strong>List Produk</strong></h1>
    <a href="tambah_produk" target="_blank">Tambah Produk +</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th> </th>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="{{ asset('img/2.jpg') }}" alt="" class="w-32 h-32 object-cover"></td>
            <td>T-shirt</td>
            <td>Rp. 179.000</td>
            <td>At vero eos et accusamus et iusto...</td>
            <td>10</td>
            <td> </td>
        </tr>
        <tr>
            <td>2</td>
            <td><img src="{{ asset('img/3.jpg') }}" alt="" class="w-32 h-32 object-cover"></td>
            <td>T-shirt</td>
            <td>Rp. 159.000</td>
            <td>At vero eos et accusamus et iusto...</td>
            <td>12</td>
            <td> </td>
        </tr>
        <tr>
            <td>3</td>
            <td><img src="{{ asset('img/4.jpg') }}" alt="" class="w-32 h-32 object-cover"></td>
            <td>T-shirt</td>
            <td>Rp. 139.000</td>
            <td>At vero eos et accusamus et iusto...</td>
            <td>15</td>
            <td> </td>
        </tr>
        <tr>
            <td>4</td>
            <td><img src="{{ asset('img/5.jpg') }}" alt="" class="w-32 h-32 object-cover"></td>
            <td>T-shirt</td>
            <td>Rp. 189.000</td>
            <td>At vero eos et accusamus et iusto...</td>
            <td>15</td>
            <td> </td>
        </tr>
        <tr>
            <td>5</td>
            <td><img src="{{ asset('img/6.jpg') }}" alt="" class="w-32 h-32 object-cover"></td>
            <td>T-shirt</td>
            <td>Rp. 199.000</td>
            <td>At vero eos et accusamus et iusto...</td>
            <td>18</td>
            <td> </td>
        </tr>
    </table>

    </body> 

</div>

@include('partial.footer')