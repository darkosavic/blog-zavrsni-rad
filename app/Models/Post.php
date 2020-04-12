<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $table = "posts";
    protected $fillable = [
        'user_id', 'category_id', 'title', 'body',
        'imageUrl', 'important', 'disabled', 'preview'
    ];

    public function category() {
        return $this->belongsTo(
                        Category::class,
                        'category_id',
                        'id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments() {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany(
                        Tag::class,
                        'tag_post',
                        'post_id',
                        'tag_id'
        );
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

        if ($timeBetween->m >= 1) {
            return $timeBetween->format("%m Months");
        }

        if ($timeBetween->h >= 24) {
            return $timeBetween->format("%d Days");
        }

        if ($timeBetween->h >= 1) {
            return $timeBetween->format("%h Hours");
        }

        return $timeBetween->format("%m Minutes");
    }

    public function displayDateWithPipe() {
        return $this->created_at->format("d M | y");
    }

    public function displayDateForFooterPost() {
        return $this->created_at->format("F d, Y");
    }

    public function getPostUrl() {
        return route('front.blog.post', [
            'post' => $this->id,
            'seoSlug' => \Str::slug($this->title),
        ]);
    }

    public function getSendCommentUrl() {
        return route('front.comment.sendComment', [
            'post' => $this->id
        ]);
    }

    public function getPhotoUrl() {
        if ($this->photo1) {
            return '/storage/posts/' . $this->imageUrl;
        }

        return '/themes/front/img/blog-post-3.jpeg';
    }

    public function getPhotoThumbUrl() {
        //originalna slika: /storage/products/11_photo1_blabla.png - 600x800
        //thumb slika		: /storage/products/thumbs/11_photo1_blabla.png  - 300 x 300

        if ($this->imageUrl) {
            return '/storage/posts/thumbs/' . $this->imageUrl;
        }

        return '/themes/front/img/small-thumbnail-1.jpg';
    }

    public function deletePhoto() {
        if (!$this->imageUrl) {
            return $this; //fluent interface
        }

        $photoFilePath = public_path('/storage/products/' . $this->imageUrl);

        if (!is_file($photoFilePath)) {
            //informacija o fajlu postoji u bazi
            //ali fajl e postoji fizicki na Hard Disku
            return $this;
        }

        unlink($photoFilePath);

        //brisanje thumb verzije

        $photoThumbPath = public_path('/storage/products/thumbs/' . $this->imageUrl);

        if (!is_file($photoThumbPath)) {
            //thumb slika ne postoji na disku
            return $this;
        }

        unlink($photoThumbPath);

        return $this;
    }

}
