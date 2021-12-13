<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Blog extends Model
{
    use HasFactory;
    use HasTags;
    use SoftDeletes;

    protected $fillable = [
        'header_img',
        'header_video',
        'title',
        'slug',
        'content',
        'is_published',
        'author',
    ];

    public static function topTrending()
    {
        return (new self())->newQuery()->orderBy('created_at', 'desc')->with(['tags'])->first();
    }

    public static function latestUpload()
    {
        return (new self())->newQuery()->orderBy('created_at', 'desc')->with(['tags'])->take(5)->get();
    }
}
