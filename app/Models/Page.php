<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'featured_image',
        'seo_title', 'seo_description', 'seo_keywords',
        'canonical_url', 'no_index', 'no_follow'
    ];
}
