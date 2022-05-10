<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parsedown;

class Milestone extends Model
{
    use HasFactory;
    use HasDateTimeFormatter;
    public function project(){
        return $this->belongsTo(Project::class);
    }
    protected function parseContent(): Attribute
    {
        $parsedown = new Parsedown();
        return Attribute::make(
            get: fn () => $parsedown->parse($this->content),
        );
    }
}
