<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    
    public function getPhotoUrl() {
        return '/themes/front/img/user.svg';
    }
    
    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
    
    public function displayDate() {
        return $this->created_at->format("M Y");
    }
}
