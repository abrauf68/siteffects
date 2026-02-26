<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'main_image',
        'scroll_image',
        'live_url',
        'client',
        'technologies',
        'completion_date',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'description',
        'features',
        'category',
        'position',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'completion_date' => 'date',
        'position'        => 'integer',
    ];
}
