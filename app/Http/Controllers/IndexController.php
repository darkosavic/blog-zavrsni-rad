<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleryImages;
use App\Models\Post;
use App\Models\IndexSlide;

class IndexController extends Controller
{
    public function index() {
        
        $galeryImages = (new GaleryImages())->getPhotoUrls();
        
        $newFetaured = Post::query()
                ->where('important', true)
                ->where('disabled', false)
                ->orderBy('created_at', 'DESC')
                ->limit(3)
                ->get();
        
        $indexSlides = IndexSlide::query()
                ->where('disabled', 'false')
                ->get();
        
        return view('front.index.index', [
            'allGaleryImages' => $galeryImages,
            'newFeaturedPosts' => $newFetaured,
            'latestPosts' => $this->getLatestPosts(),
            'indexSlides' => $indexSlides
        ]); 
    }
    
    public function getNewestPosts() {
        $newestPosts = Post::query()
                ->orderBy('created_at', 'DESC')
                ->limit(3)
                ->get();
        
        return view('front._layout.partials.newest_posts_footer', [
            'newestPosts' => $newestPosts,
        ]);
    }
    
    private function getLatestPosts() {
        $latestPost = Post::query()
                ->where('disabled', false)
                ->orderBy('created_at', 'DESC')
                ->limit(3)
                ->get();
        
        return $latestPost; 
    }
}

            
          
       