<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
