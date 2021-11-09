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

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Muhammad Syafiq Akmal",
        "alamat" => "Pontianak",
        "image" => "survei.jpg"
    ]);
});

Route::get('/blog', function () {

    $products_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Syafiq Akmal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nostrum quaerat doloremque quis odit, recusandae molestias inventore error cupiditate animi asperiores non necessitatibus earum ipsa quam dignissimos reprehenderit sunt consequatur deleniti nobis. Ipsa quod sint, at nemo obcaecati, mollitia fugit totam possimus, molestiae quas sunt consequatur rem expedita a facilis?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-dua",
            "author" => "Hanny Handayani Sucinta",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nostrum quaerat doloremque quis odit, recusandae molestias inventore error cupiditate animi asperiores non necessitatibus earum ipsa quam dignissimos reprehenderit sunt consequatur deleniti nobis. Ipsa quod sint, at nemo obcaecati, mollitia fugit totam possimus, molestiae quas sunt consequatur rem expedita a facilis?"
        ],
    
    ];

    return view('posts', [
        "title" => "Products",
        "posts" => $products_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {

    $products_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Syafiq Akmal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nostrum quaerat doloremque quis odit, recusandae molestias inventore error cupiditate animi asperiores non necessitatibus earum ipsa quam dignissimos reprehenderit sunt consequatur deleniti nobis. Ipsa quod sint, at nemo obcaecati, mollitia fugit totam possimus, molestiae quas sunt consequatur rem expedita a facilis?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-dua",
            "author" => "Hanny Handayani Sucinta",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nostrum quaerat doloremque quis odit, recusandae molestias inventore error cupiditate animi asperiores non necessitatibus earum ipsa quam dignissimos reprehenderit sunt consequatur deleniti nobis. Ipsa quod sint, at nemo obcaecati, mollitia fugit totam possimus, molestiae quas sunt consequatur rem expedita a facilis?"
        ],
    
    ];

    $new_post = [];
    foreach($products_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});