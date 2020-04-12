<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        return $this->hasMany(Models\Post::class, 'user_id', 'id');
    }

    public function getAvatar() {
        if ($this->photo) {
            return '/storage/users/' . $this->photo;
        }

        return '/themes/admin/dist/img/default-150x150.png';
    }

    public function getSingleUserUrl() {
        return route('front.blog.single-user', [
            'user' => $this->id,
            'seoSlug' => \Str::slug($this->name),
        ]);
    }

    public function deletePhoto() {
        if (!$this->photo) {
            return $this;
        }

        $photoPath = public_path('/storage/users/' . $this->photo);

        if (is_file($photoPath)) {
            unlink($photoPath);
        }

        return $this;
    }

}
