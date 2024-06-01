<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListUsersController;
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
Route::get('search', function () {
    return view('users.search');
});
Route::get('page', function () {
    return view('users.page');
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

// Route::get('admin.users', [ListUsersController::class, 'show']);
Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'create']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);