<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post{
    private static $blog_posts =  [
        [
        "title" => "judul post 1",
        "slug" => "judul-post-1",
        "author" => "benita",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
         Minima incidunt aliquid esse quasi, quibusdam assumenda architecto quae quod sed accusamus."
      
    ],
    [
        "title" => "judul post 2",
        "slug" => "judul-post-2",
        "author" => "benita",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
         Minima incidunt aliquid esse quasi, quibusdam assumenda architecto quae quod sed accusamus."
       
    ]];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts= static::all();
        // $post=[];
        // foreach($posts as $p){
        //     if($p['slug']===$slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
