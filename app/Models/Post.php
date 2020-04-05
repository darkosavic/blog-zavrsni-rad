<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    
    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    
    public function getBodyPreview() {
        return substr($this->body, 0, 300);
    }
    
    public function getTimeFormattedForUi() {
        $currentTime = date_create();
        $createdAt = $this->created_at;
        $timeBetween = date_diff($currentTime, $createdAt);
        
        if ($timeBetween->y > 0) {
            return $timeBetween->format("%y Years");
        }  
        
        if($timeBetween->m >= 1) {
            return $timeBetween->format("%m Months");
        }
        
        if($timeBetween->h >= 24 ) {
            return $timeBetween->format("%d Days");
        }
        
        if($timeBetween->h >= 1) {
            return $timeBetween->format("%h Hours");
        }
        
        return $timeBetween->format("%m Minutes");
    }
}
