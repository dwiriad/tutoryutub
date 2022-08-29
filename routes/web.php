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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "name" => "Dwi Ria Wulandari",
        "email" => "dwiria@gmail.com",
        "image" => "ria.png"
    ]);
});

$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "author" => "Dwi Ria Wulandari",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatibus vel officia ea sunt dolor. Amet esse exercitationem quia, quis doloremque sunt deserunt ut, incidunt temporibus autem cum quaerat illum ea rem nostrum aut odit! Voluptate quasi, vitae perferendis corrupti tempora, dolorum perspiciatis doloribus cum itaque nobis fugit quas consectetur, iure impedit voluptatem! Veritatis omnis aut soluta fugit similique. Iste temporibus nemo aspernatur molestiae laudantium. Aliquid, doloremque incidunt delectus perspiciatis obcaecati deserunt aperiam nulla cum. Quaerat iusto modi quae in."
    ],
    [
        "title" => "Judul Post Kedua",
        "author" => "Adisti Khairunnisa",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatibus vel officia ea sunt dolor. Amet esse exercitationem quia, quis doloremque sunt deserunt ut, incidunt temporibus autem cum quaerat illum ea rem nostrum aut odit! Voluptate quasi, vitae perferendis corrupti tempora, dolorum perspiciatis doloribus cum itaque nobis fugit quas consectetur, iure impedit voluptatem! Veritatis omnis aut soluta fugit similique. Iste temporibus nemo aspernatur molestiae laudantium. Aliquid, doloremque incidunt delectus perspiciatis obcaecati deserunt aperiam nulla cum. Quaerat iusto modi quae in."
    ],
];

Route::get('/blog', function(){
    return view('posts', [
        "title" => "Posts"
    ]);
});
