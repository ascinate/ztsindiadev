<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'excerpt',
        'featured_image', 'category_id',
        'seo_title', 'seo_description', 'seo_keywords',
        'canonical_url', 'no_index', 'no_follow'
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }
}
