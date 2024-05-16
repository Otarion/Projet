<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
// Insertion des posts dans la page d'actualités
    public function index(): View
    {
        return view ('posts.news',[
            'posts'=> Post::latest()->paginate(10),
        ]);
    }

    //Insertion des posts dans le carousel
    public function carousel()
    {
        return view('posts.index',[
            'posts'=> Post::latest()->paginate(5),
        ]);
    }

    //Affichage des posts individuellement
    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}