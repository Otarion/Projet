<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FAQController extends Controller
{
    public function faq(Request $request)
    {
        //Récupération de tous les éléments de la faq
        $faq = FAQ::all();
        return view('posts.faq', [
            'faqs'=>$faq,
        ]);
    }

    public function show(FAQ $faq): View
    {
        //Affichage des éléments de la faq sur la page "A propos"
        return view('posts.faq', [
            'faq' => $faq,
        ]);
    }
}
