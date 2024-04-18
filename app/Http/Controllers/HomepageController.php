<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomepageController extends Controller
{
    public function index()
    {
        //$articles = Article::all();
        $articles = Article::paginate(10);

        return view('homepage.index', [
            'articles' => $articles,
        ]);
    }
}
