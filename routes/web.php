<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListUsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowController;

/*view function*/
Route::get('/', function () {
    return view('users.welcome');
});
Route::get('register', function () {
    return view('users.register');
});
Route::get('login', function () {
    return view('users.login');
});
Route::get('contact', function () {
    return view('users.contact');
});
Route::get('search', function () {
    return view('users.search');
});
Route::get('favorite', function () {
    return view('ausers.favorite');
});
Route::get('keranjang', function () {
    return view('users.keranjang');
});
Route::get('list', function () {
    return view('users.list');
});
Route::get('detail', function () {
    return view('users.detail');
});
Route::get('dashboard', function () {
    return view('users.dashboard'); 
});
Route::get('login', function () {
    return view('users.login');
})->middleware('auth');

Route::get('admin', function () {
    return view('admin.dashboard_admin');
});
Route::get('list_users', function () {
    return view('admin.list_users');
});
Route::get('listproduk', function () {
    return view('admin.list_produk');
});
Route::get('tambah', function () {
    return view('admin.tambah');
});
Route::get('edit', function () {
    return view('admin.editproduk');
});

// Route Controller Showcase barang 
Route::get('/oncom', [ShowController::class, 'index'])->name('show');
Route::get('/oncom/{id}', [ShowController::class, 'show'])->name('product.detail');
// Route Controller Produk
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/listproduk', [ProductController::class, 'index'])->name('product.index');
Route::get('/editproduk/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/editproduk/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/editproduk/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
// Route Controller User
Route::get('/listusers', [ListUsersController::class, 'showUser']);
Route::delete('/listusers/{id}', [ListUsersController::class, 'destroy'])->name('users.destroy');;
// Route Controller Login dan Register
Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'create']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');