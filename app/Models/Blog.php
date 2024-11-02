<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'cover_img',
        'keywords',
        'creator',
        'tags',
        'content',
    ];
}
