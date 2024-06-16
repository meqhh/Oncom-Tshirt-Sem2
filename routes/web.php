<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComponenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListUsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*view function*/
Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index'])->name('registrasi');
    Route::post('/registrasi', [RegisterController::class, 'create']);
    Route::get('/', [AdminController::class, 'beranda'])->name('beranda');
});

// Rute yang hanya dapat diakses oleh pengguna yang telah terautentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/beranda', [AdminController::class, 'beranda']);
    Route::get('/beranda/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/beranda/admin/listuser', [ListUsersController::class, 'showUser'])->middleware('userAkses:admin');
    Route::delete('/listusers/{id}', [ListUsersController::class, 'destroy'])->name('delete.user')->middleware('userAkses:admin');
    Route::get('/beranda/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::get('/beranda/user/profile', [ProfilController::class, 'profil'])->name('profile')->middleware('userAkses:user');
    Route::get('/beranda/user/editprofile', [ProfilController::class, 'edit'])->name('editprofile')->middleware('userAkses:user');
    Route::post('/beranda/user/editprofile', [ProfilController::class, 'update'])->name('update.profile')->middleware('userAkses:user');
    Route::get('/beranda/admin/profil', [ProfilController::class, 'profiladmin'])->name('profil')->middleware('userAkses:admin');
    Route::get('/beranda/admin/editprofil', [ProfilController::class, 'editadmin'])->name('editprofil')->middleware('userAkses:admin');
    Route::post('/beranda/admin/editprofil', [ProfilController::class, 'updateadmin'])->name('update.profil')->middleware('userAkses:admin');
    Route::get('/beranda/admin/dashboard', [ProfilController::class, 'home'])->name('dashboard')->middleware('userAkses:admin');
    Route::get('/beranda/user/oncom', [ShowController::class, 'index'])->name('show');
    Route::get('/beranda/user/oncom/{id}', [ShowController::class, 'show'])->name('product.detail');
// Route Controller Produk
    Route::get('/beranda/tambah', [ProductController::class, 'create'])->name('product.create')->middleware('userAkses:admin');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store')->middleware('userAkses:admin');
    Route::get('/beranda/listproduk', [ProductController::class, 'index'])->name('product.index')->middleware('userAkses:admin');
    Route::get('/beranda/editproduk/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/beranda/editproduk/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/beranda/editproduk/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


// Rute umum
Route::get('/home', function(){
    return redirect('/beranda');
});
Route::get('/beranda/listusers', [ListUsersController::class, 'showUser']);
Route::delete('/beranda/listusers/{id}', [ListUsersController::class, 'destroy'])->name('users.destroy');;

//componenuser
//Route::get('/', [AdminController::class, 'beranda']);
//Route::get('/keranjang', [ComponenController::class, 'keranjang']);
//Route::get('/contact', [ComponenController::class, 'contact']);
//Route::get('/favorite', [ComponenController::class, 'favorite']);
//Route::get('/list', [ComponenController::class, 'list']);
//profile
//Route::get('/profile',[ProfilController::class, 'profil']);
Route::get('/panel', function(){
    return view('components/adminpanel');
});
