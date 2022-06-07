<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Column;
use Illuminate\Http\Request;
use Parsedown;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query()->with(['column']);
        if ($column_id = $request->get('column_id')) {
            $query->where('column_id', $column_id);
        }
        $articles = $query->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $columns = Column::all();
        return view('articles.index', compact('articles', 'columns'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
