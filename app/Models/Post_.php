<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Dias Utsman",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit
      . Architecto maiores ipsa aliquid blanditiis eos deserunt 
      dolorem quis, explicabo atque obcaecati ab? Voluptatibus earum exercitationem nesciunt quidem, vel eaque iste eius dicta sint magnam voluptate 
      explicabo, blanditiis reprehenderit dolore eligendi animi cumque tenetur similique laudantium beatae, aut porro deserunt? Atque expedita accusamus facere minima esse quia, voluptates hic perspiciatis aliquid bland
      itiis nulla fugiat. Doloremque quo quaerat corporis id! Dolore vitae, aspernatur fugiat eaque, ut est vero corrupti, voluptates quam ad accusamus!",
    ],
    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Doddy",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat eos quasi, tempora explicabo iste blanditiis repellat alias, id dolor minima, expedita deleniti accusamus asperiores quis! Error nemo possimus iure nostrum optio consequuntur, dolores quod harum in, minima voluptas sit dicta, molestiae eius rem hic recusandae expedita tempore earum ex aut ratione alias eaque nobis. Hic officiis voluptates, molestiae fugiat quae commodi porro dolorum soluta in vero atque? Soluta officiis impedit nihil ullam accusamus. Dolorum totam sapiente similique hic impedit nulla facilis incidunt reiciendis. Veritatis corporis quas, vitae recusandae eaque illum, necessitatibus placeat id vero, molestias eius facere. Placeat, eligendi maxime.",
    ],
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
