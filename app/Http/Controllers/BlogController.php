<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\Tag;
use \App\Models\Post;
use App\Models\Comment;

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

        $latestPosts = Post::query()
                ->orderBy('created_at', 'DESC')
                ->limit(3)
                ->get();

        return view('front.blog.index', [
            "posts" => $posts,
            "categories" => $categories,
            "tags" => $tags,
            "latestPosts" => $latestPosts
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

        $latestPosts = Post::query()
                ->orderBy('created_at', 'DESC')
                ->limit(3)
                ->get();

        return view('front.blog.index', [
            "main_title" => "Category " . $category->name,
            "posts" => $posts,
            "categories" => $categories,
            "tags" => $tags,
            "latestPosts" => $latestPosts
        ]);
    }
    
    public function singlePost(Post $post) {

        $categories = Category::query()
                ->orderBy('name', 'ASC')
                ->get();

        $tags = Tag::query()
                ->orderBy('name', 'ASC')
                ->get();

        $latestPosts = Post::query()
                ->orderBy('created_at', 'DESC')
                ->limit(3)
                ->get();
        
        return view('front.blog.post', [
            "post" => $post,
            "categories" => $categories,
            "tags" => $tags,
            "latestPosts" => $latestPosts
        ]);
    }
}
