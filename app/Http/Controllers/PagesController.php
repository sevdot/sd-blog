<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        $articles = Article::with(['column'])->orderBy('created_at','desc')->limit(10)->get();
        return view('pages.root',compact('articles'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
