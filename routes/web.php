<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('search', function () {
    return view('search');
});

Route::get('admin', function () {
    return view('dashboard_admin');
});

Route::get('favorite', function () {
    return view('favorite');
});

Route::get('keranjang', function () {
    return view('keranjang');
});

Route::get('list', function () {
    return view('list');
});

Route::get('page', function () {
    return view('page');
});