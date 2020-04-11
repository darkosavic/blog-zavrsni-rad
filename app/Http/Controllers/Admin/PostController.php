<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

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
    
    public function ableDisable(Post $post) {
        $post->disabled = !$post->disabled;
        $post->save();
        
        return redirect()->route('home');
    }
    
    public function idnexNew() {
        return view('admin.partials.new_post', [
            'tags' => $this->getTags(),
            'categories' => $this->getCategories()
        ]);
    }
    
    private function getCategories() {
        return Category::query()
                        ->orderBy('name', 'ASC')
                        ->get();
    }

    private function getTags() {
        return Tag::query()
                        ->orderBy('name', 'ASC')
                        ->get();
    }
}
