<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
// Insertion des posts dans la page d'actualités
    public function index()
    {
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

    public function news(Request $request): View
    {
        $posts = Post::query();

        if($search = $request->search)
        {
            $posts->where(function (Builder $query) use ($search) {
                $query->where('title', 'LIKE', "%{$search}%")
                ->orWhere('content', 'LIKE', "%{$search}%");
            });
        }
    
        return view('posts.news',[
            'posts' => $posts->latest()->paginate(5)
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