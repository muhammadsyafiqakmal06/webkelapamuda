<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home' , [
        "title" => "Home"
    ]);
});

Route::get('/proses', function () {
    return view('proses' , [
        "title" => "proses"
    ]);
});

Route::get('/product', function () {
    return view('product' , [
        "title" => "product"
    ]);
});

Route::get('/contact', function () {
    return view('contact' , [
        "title" => "contact"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Muhammad Syafiq Akmal",
        "alamat" => "Pontianak",
        "image" => "survei.jpg"
    ]);
});


