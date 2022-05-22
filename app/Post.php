<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    //

    protected $fillable = [
        'title',
        'content',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    static public function generateSlug($originalStr)
    {
        $baseSlug = Str::of($originalStr)->slug('-')->__toString();
        $slug = $baseSlug;
        $_i = 1;
        while (self::where('slug', $slug)->first()) {
            $slug = "$baseSlug-$_i";
            $_i++;
        }
        return $slug;
    }
}