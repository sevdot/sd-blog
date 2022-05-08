<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Parsedown;

class Article extends Model
{
    use HasFactory;
    use HasDateTimeFormatter;

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
}
