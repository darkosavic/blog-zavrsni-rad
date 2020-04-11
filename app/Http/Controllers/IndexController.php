<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleryImages;
use App\Models\Post;

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
        
        
        
        return view('front.index.index', [
            'allGaleryImages' => $galeryImages,
            'newFeaturedPosts' => $newFetaured,
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
    
//    public function latestPostsIndex() {
//        
//        $latestPost = Post::query()
//                ->where('disabled', false)
//                ->orderBy('created_at', 'DESC')
//                ->limit(12)
//                ->get();
//        
//        return view('front.index.index', [
//            'latestPosts' => $latestPost,
//        ]); 
//    }
}

            
          
       