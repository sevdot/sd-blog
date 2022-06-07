<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\Sitemap\SitemapGenerator;

class PagesController extends Controller
{
    public function root()
    {
        $articles = Article::with(['column'])->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->limit(10)
            ->get();
        return view('pages.root', compact('articles'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sitemap()
    {

        $map = Cache::remember('site-map', 120, function () {
            $path = public_path('sitemap.xml');
            SitemapGenerator::create(config('app.url'))->writeToFile($path);
            return $path;
        });
        return response()->file($map);
    }
}
