<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chronicle extends Model
{
    protected $fillable = [
        'author',
        'author_job',
        'category',
        'title',
        'img',
        'article'
    ];
}
