<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentNews extends Model
{
    protected $table = 'contentNews';

    protected $fillable = [
         'title',
        'image',
        'date',
        'description',
    ];
}
