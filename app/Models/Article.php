<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\HasDateTimeFormatter;

class Article extends Model
{
    use HasFactory;
    use HasDateTimeFormatter;
    public function column(){
        return $this->belongsTo(Column::class);
    }
}
