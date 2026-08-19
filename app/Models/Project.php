<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'short_description', 'thumbnail',
        'images', 'github_url', 'live_url', 'technologies',
        'category', 'featured', 'order'
    ];

    protected $casts = [
        'technologies' => 'array',
        'images' => 'array',
        'featured' => 'boolean',
    ];
}
