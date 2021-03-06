<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = "categories";

    public function posts() {
        return $this->hasMany(
                        Post::class,
                        'category_id',
                        'id');
    }

    public function getFrontUrl() {
        return route('front.blog.single-category', [
            'category' => $this->id,
            'seoSlug' => \Str::slug($this->name),
        ]);
    }
    
    public function getDeleteUrl() {
        return route('home.categories.delete', [
            'category' => $this->id
        ]);
    }
    
    public function getUpdateUrl() {
        return route('home.categories.update', [
            'category' => $this->id,
        ]);
    }
}
