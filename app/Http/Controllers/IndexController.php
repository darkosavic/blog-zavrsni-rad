<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleryImages;

class IndexController extends Controller
{
    public function index() {
        
        $galeryImages = (new GaleryImages())->getPhotoUrls();
        
        return view('front.index.index', [
            'allGaleryImages' => $galeryImages,
        ]);
    }
}
