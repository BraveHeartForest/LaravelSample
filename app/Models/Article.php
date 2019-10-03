<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles'; //SQL発行対象のテーブル名を明記
    protected $fillable = [
        'name',
        'email',
        'age',
        'area',
        'gender',
        'media1',
        'media2',
        'note',
        'image',
    ];
}
