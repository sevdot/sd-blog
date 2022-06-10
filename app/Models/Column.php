<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    use HasFactory;
    use HasDateTimeFormatter;
    protected $fillable = [
        'name'
    ];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
