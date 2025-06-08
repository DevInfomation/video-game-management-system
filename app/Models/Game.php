<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $fillable = [
        'title',
        'developer',
        'publisher',
        'category',
        'published_year',
        'price',
        'image',
    ];
}
