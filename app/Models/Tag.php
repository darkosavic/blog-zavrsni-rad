<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    
    public function posts()
    {
        return $this->belongsToMany(
            Post::class,
            'tag_post',
            'post_id',
            'tag_id'
        );
    }
    
    public function getFrontUrl() {
        return route('front.blog.single-tag', [
            'tag' => $this->id
        ]);
    }
}
