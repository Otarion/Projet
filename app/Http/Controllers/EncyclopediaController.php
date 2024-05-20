<?php

namespace App\Http\Controllers;

use App\Models\Encyclopedia;
use Illuminate\View\View;
use Illuminate\Http\Request;

class EncyclopediaController extends Controller
{
    public function ency(Request $request)
    {
        $encyclopedia = Encyclopedia::all();
        return view('posts.ency',[
            'encyclopedias'=>$encyclopedia
        ]);
    }

    public function show(Encyclopedia $encyclopedia): View
    {
        return view('posts.ency', [
            'encyclopedia' => $encyclopedia,
        ]);
    }
}
