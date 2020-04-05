<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\Tag;
use \App\Models\Post;

class BlogController extends Controller {

    public function index() {

        $posts = Post::query()
                ->orderBy('created_at', 'DESC')
                ->paginate(4);
        
        $categories = Category::query()
                ->orderBy('name', 'ASC')
                ->get();

        $tags = Tag::query()
                ->orderBy('name', 'ASC')
                ->get();

        return view('front.blog.index', [
            "posts" => $posts,
            "categories" => $categories,
            "tags" => $tags
        ]);
    }
    
    public function singleCategory(Category $category) {
        $posts = Category::find($category->id)
                ->posts()
                ->orderBy('created_at', 'DESC')
                ->paginate(4);
        
        $categories = Category::query()
                ->orderBy('name', 'ASC')
                ->get();

        $tags = Tag::query()
                ->orderBy('name', 'ASC')
                ->get();
        
        return view('front.blog.index', [
            "main_title" => "Category " . $category->name, 
            "posts" => $posts,
            "categories" => $categories,
            "tags" => $tags
        ]);
    }

}
