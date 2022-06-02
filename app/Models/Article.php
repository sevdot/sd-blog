<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Parsedown;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;


class Article extends Model implements Feedable
{
    use HasFactory;
    use HasDateTimeFormatter;
    protected $guarded=[];
    public function column()
    {
        return $this->belongsTo(Column::class);
    }

    public function link($params = [])
    {
        return route('articles.show', array_merge([$this->id, $this->slug], $params));
    }

    protected function parseContent(): Attribute
    {
        $parsedown = new Parsedown();
        return Attribute::make(
            get: fn () => $parsedown->parse($this->content),
        );
    }

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->excerpt)
            ->updated($this->updated_at)
            ->link($this->link())
            ->authorName('SevDot')
            ->authorEmail('sevdot8@gmail.com');
    }

    public static function getFeedItems()
    {
        return Article::query()->orderBy('created_at','desc')->get();
    }

}
