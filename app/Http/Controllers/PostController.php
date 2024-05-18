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
    public function index(Request $request): View
    {
        return $this->postsView($request->search ? ['search' => $request->search] : []);
    }

    public function news(Request $request): View
    {
        return $this->postsView($request->search ? ['search' => $request->search] : []);
    }

    public function postsByCategory(Category $category): View
    {
        return $this->postsView(['category'=> $category]);
    }

    protected function postsView(array $filters): View
    {
        return view('posts.news', [
            // 'posts' => $category->posts()->latest()->paginate(10),
            'posts' => Post::filters($filters)->latest()->paginate(5),
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