<?php

namespace App\Models;
use Illuminate\Support\Str;
    

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description'
    ];

    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($blog) {
            $blog->slug = Str::slug($blog->title, '-');
        });
    }
}
