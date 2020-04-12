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
            'tag' => $this->id,
            'seoSlug' => \Str::slug($this->name),
        ]);
    }
    
    public function getDeleteUrl() {
        return route('home.tags.delete', [
            'tag' => $this->id
        ]);
    }
    
    public function getUpdateUrl() {
        return route('home.tags.update', [
            'tag' => $this->id
        ]);
    }
}
