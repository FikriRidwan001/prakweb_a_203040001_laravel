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

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fikri",
        "email" => "203040001@mail.unpas.ac.id",
        "image" => "Profil Fikri.jpg"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fikri Ridwan Faturohman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus quisquam cupiditate maxime laboriosam quia voluptate quasi at veritatis accusamus, fugiat eius harum iste voluptatem nam totam? Possimus, eius deleniti. Non, impedit itaque praesentium obcaecati mollitia expedita, eum possimus debitis temporibus, dolores laudantium amet cumque accusamus explicabo repudiandae consequuntur dolor distinctio rem error doloremque natus atque voluptatibus totam. Dolor cumque vero illum tenetur facere mollitia natus, cum perspiciatis! Optio, illum dignissimos consequatur temporibus accusamus adipisci exercitationem magnam nemo error id?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis accusantium placeat quae laboriosam nobis, soluta, aliquam reiciendis, mollitia neque natus modi porro perspiciatis repudiandae at aperiam ad ratione officiis minus? Atque tenetur doloremque non, eos quidem aut aperiam saepe perspiciatis laboriosam totam nulla iusto reiciendis dolorem aliquid quam ex, laudantium quo odio tempora odit deserunt ratione? Nobis esse neque molestiae consequatur eum commodi dolorum maiores autem eaque vitae natus corrupti iste illum, libero ullam eligendi ex quaerat. Dicta nemo sed velit esse in sapiente voluptatibus quibusdam repellendus, ut, odit sint ratione omnis possimus doloremque consequuntur quod soluta atque doloribus modi?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fikri Ridwan Faturohman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus quisquam cupiditate maxime laboriosam quia voluptate quasi at veritatis accusamus, fugiat eius harum iste voluptatem nam totam? Possimus, eius deleniti. Non, impedit itaque praesentium obcaecati mollitia expedita, eum possimus debitis temporibus, dolores laudantium amet cumque accusamus explicabo repudiandae consequuntur dolor distinctio rem error doloremque natus atque voluptatibus totam. Dolor cumque vero illum tenetur facere mollitia natus, cum perspiciatis! Optio, illum dignissimos consequatur temporibus accusamus adipisci exercitationem magnam nemo error id?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis accusantium placeat quae laboriosam nobis, soluta, aliquam reiciendis, mollitia neque natus modi porro perspiciatis repudiandae at aperiam ad ratione officiis minus? Atque tenetur doloremque non, eos quidem aut aperiam saepe perspiciatis laboriosam totam nulla iusto reiciendis dolorem aliquid quam ex, laudantium quo odio tempora odit deserunt ratione? Nobis esse neque molestiae consequatur eum commodi dolorum maiores autem eaque vitae natus corrupti iste illum, libero ullam eligendi ex quaerat. Dicta nemo sed velit esse in sapiente voluptatibus quibusdam repellendus, ut, odit sint ratione omnis possimus doloremque consequuntur quod soluta atque doloribus modi?"
        ]
    ];


    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
