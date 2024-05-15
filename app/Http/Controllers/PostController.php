<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view ('layouts.news',[
            'posts'=> Post::latest()->paginate(10),
        ]);
    }
}