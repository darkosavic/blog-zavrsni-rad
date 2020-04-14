<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndexSlide extends Model {

    protected $table = "index_slides";
    protected $fillable = [
        'title', 'button_text', 'photo', 'url', 'disabled'
    ];

    public function deletePhoto() {
        if (!$this->photo) {
            return $this;
        }

        $photoPath = public_path('/storage/slides/' . $this->photo);

        if (is_file($photoPath)) {
            unlink($photoPath);
        }

        return $this;
    }
}
