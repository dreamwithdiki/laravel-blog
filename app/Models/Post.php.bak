<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dev Diki",
            "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, saepe neque? Similique magni provident omnis obcaecati explicabo odit, voluptatum adipisci, eius totam, voluptate fuga quibusdam id nihil quasi magnam esse quo facere asperiores tempora quam? Iusto expedita error unde minima cum? Sint itaque illo voluptatum natus dolorem, eveniet repudiandae facilis, veniam quasi adipisci repellat ea eligendi praesentium eos perferendis eius soluta velit sunt! Doloremque nostrum officiis maxime sequi veniam perferendis officia cupiditate! Rem officia dolorem doloremque sit et, dolor explicabo?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Diki Pahrilah",
            "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, saepe neque? Similique magni provident omnis obcaecati explicabo odit, voluptatum adipisci, eius totam, voluptate fuga quibusdam id nihil quasi magnam esse quo facere asperiores tempora quam? Iusto expedita error unde minima cum? Sint itaque illo voluptatum natus dolorem, eveniet repudiandae facilis, veniam quasi adipisci repellat ea eligendi praesentium eos perferendis eius soluta velit sunt! Doloremque nostrum officiis maxime sequi veniam perferendis officia cupiditate! Rem officia dolorem doloremque sit et, dolor explicabo?"
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
