<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover_img',
        'cover_url_large',
        'keywords',
        'creator',
        'tags',
        'content',
        'created_at',
    ];
}
