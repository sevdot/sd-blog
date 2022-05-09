<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Models\Article;

class ArticleObserver
{
    public function saving(Article $article)
    {
        $article->excerpt = $this->make_excerpt($article->content);
        if ( ! $article->slug) {
            $article->slug = app(SlugTranslateHandler::class)->translate($article->title);
        }
    }

    public function make_excerpt($value, $length = 200)
    {
        $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
        return str()->limit($excerpt, $length);
    }
}
