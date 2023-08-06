<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view("home", [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view("about", [
        "title" => "about",
        "name" => "BEN",
        "email" => "HELo@gmail.com",
        "img" => "helo.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);

// Route::get('/posts/{slug}', function ($slug) {
    // $blog_post = [
    //     [
    //         "title" => "judul post 1",
    //         "slug" => "judul-post-1",
    //         "author" => "benita",
    //         "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
    //          Minima incidunt aliquid esse quasi, quibusdam assumenda architecto quae quod sed accusamus."
          
    //     ],
    //     [
    //         "title" => "judul post 2",
    //         "slug" => "judul-post-2",
    //         "author" => "benita",
    //         "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
    //          Minima incidunt aliquid esse quasi, quibusdam assumenda architecto quae quod sed accusamus."
           
    //     ]
    // ];
    // foreach($blog_post as $post ){
    //     if($post ["slug"] === $slug ){
    //         $new_post = $post;
    //     }
    // }
    
// });

