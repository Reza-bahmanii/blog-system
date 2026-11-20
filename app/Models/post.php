<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $attributes = [
        'title',
        'category',
        'content'
    ];
}
