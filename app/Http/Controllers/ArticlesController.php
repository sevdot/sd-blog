<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Parsedown;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);
        return view('articles.index',compact('articles'));
    }

    public function show(Article $article,Parsedown $parsedown){
        return view('articles.show',compact('article'));
    }

    public function getDetailBySlug($slug,Parsedown $parsedown){
        $article = Article::where('slug',$slug)->first();
        if (!$article){
            return redirect()->route('root');
        }
        $article->content = $parsedown->parse($article->content);
        return view('articles.show',compact('article'));
    }
}
