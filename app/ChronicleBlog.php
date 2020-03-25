<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChronicleBlog extends Model
{
    protected $fillable = [
        'author',
        'author_job',
        'category',
        'title',
        'img',
        'article',
        'updated_at'
    ];
}
