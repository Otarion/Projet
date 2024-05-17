<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
// Insertion des posts dans la page d'actualités
    public function index(Request $request): View
    {
        $posts = Post::query();

        if($search = $request->search)
        {
            $posts->where('title', 'LIKE', '%'.$search.'%')
            ->orWhere('content', 'LIKE', '%'.search.'%');
        }
        return view ('posts.index',[
            'posts'=> Post::latest()->paginate(10),
        ]);
    }

    public function postsByCategory(Category $category): View
    {
        return view('posts.news', [
            // 'posts' => $category->posts()->latest()->paginate(10),
            'posts' => Post::where(
                'category_id', $category->id
            )->latest()->paginate(10),
        ]);
    }

    //Insertion des posts dans le carousel
    public function news()
    {
        return view('posts.news',[
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