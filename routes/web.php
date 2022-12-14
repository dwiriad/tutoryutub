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


Route::get('/blog', function(){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dwi Ria Wulandari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatibus vel officia ea sunt dolor. Amet esse exercitationem quia, quis doloremque sunt deserunt ut, incidunt temporibus autem cum quaerat illum ea rem nostrum aut odit! Voluptate quasi, vitae perferendis corrupti tempora, dolorum perspiciatis doloribus cum itaque nobis fugit quas consectetur, iure impedit voluptatem! Veritatis omnis aut soluta fugit similique. Iste temporibus nemo aspernatur molestiae laudantium. Aliquid, doloremque incidunt delectus perspiciatis obcaecati deserunt aperiam nulla cum. Quaerat iusto modi quae in."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adisti Khairunnisa Nuzli",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur cum eos omnis corporis vero ipsam ullam iure quidem animi fugiat, dolorem doloremque nisi praesentium quaerat quisquam aut soluta eum! Nostrum illo eum quia consequuntur accusamus, tempore quod reprehenderit voluptates suscipit delectus similique sed, fugit minus nulla sequi itaque quisquam aliquam beatae iure. Atque tempore quae ad necessitatibus sit inventore consequatur, vero voluptate. Eligendi, saepe a, pariatur illo dolore impedit dolores architecto quo sed eaque labore laudantium? Quisquam quod libero unde omnis nisi. Id enim voluptatem a veritatis laboriosam fugit maiores rem, voluptatibus incidunt vel, aliquid soluta aperiam porro. Cupiditate, laboriosam!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dwi Ria Wulandari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatibus vel officia ea sunt dolor. Amet esse exercitationem quia, quis doloremque sunt deserunt ut, incidunt temporibus autem cum quaerat illum ea rem nostrum aut odit! Voluptate quasi, vitae perferendis corrupti tempora, dolorum perspiciatis doloribus cum itaque nobis fugit quas consectetur, iure impedit voluptatem! Veritatis omnis aut soluta fugit similique. Iste temporibus nemo aspernatur molestiae laudantium. Aliquid, doloremque incidunt delectus perspiciatis obcaecati deserunt aperiam nulla cum. Quaerat iusto modi quae in."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adisti Khairunnisa Nuzli",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur cum eos omnis corporis vero ipsam ullam iure quidem animi fugiat, dolorem doloremque nisi praesentium quaerat quisquam aut soluta eum! Nostrum illo eum quia consequuntur accusamus, tempore quod reprehenderit voluptates suscipit delectus similique sed, fugit minus nulla sequi itaque quisquam aliquam beatae iure. Atque tempore quae ad necessitatibus sit inventore consequatur, vero voluptate. Eligendi, saepe a, pariatur illo dolore impedit dolores architecto quo sed eaque labore laudantium? Quisquam quod libero unde omnis nisi. Id enim voluptatem a veritatis laboriosam fugit maiores rem, voluptatibus incidunt vel, aliquid soluta aperiam porro. Cupiditate, laboriosam!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
