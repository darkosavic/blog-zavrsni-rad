<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function setImportant(Post $post) {
        $post->important = !$post->important;
        $post->save();
        
        return redirect()->route('home');
    }
}
