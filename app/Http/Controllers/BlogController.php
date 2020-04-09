<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\Tag;
use \App\Models\Post;
use \App\Models\Comment;
use \App\User;

class BlogController extends Controller {

    public function index() {
        $posts = Post::query()
                ->orderBy('created_at', 'DESC')
                ->paginate(4);

        return view('front.blog.index', [
            "posts" => $posts,
            "categories" => $this->getCategories(),
            "tags" => $this->getTags(),
            "latestPosts" => $this->getLatestPosts()
        ]);
    }

    public function singleCategory(Category $category) {
        $posts = Category::find($category->id)
                ->posts()
                ->orderBy('created_at', 'DESC')
                ->paginate(4);

        return view('front.blog.index', [
            "main_title" => "Category " . $category->name,
            "posts" => $posts,
            "categories" => $this->getCategories(),
            "tags" => $this->getTags(),
            "latestPosts" => $this->getLatestPosts()
        ]);
    }
    
    public function singleTag(Tag $tag) {
        $posts = Tag::find($tag->id)
                ->posts()
                ->orderBy('created_at', 'DESC')
                ->paginate(4);

        return view('front.blog.index', [
            "main_title" => "Tag \"" . $tag->name . "\"",
            "posts" => $posts,
            "categories" => $this->getCategories(),
            "tags" => $this->getTags(),
            "latestPosts" => $this->getLatestPosts()
        ]);
    }
    
    public function search(Request $request) {
        $posts = Post::query()
                ->where('title', 'LIKE', '%'.$request['search'].'%')
                ->orWhere('body', 'LIKE', '%'.$request['search'].'%')
                ->orderBy('created_at', 'DESC')
                ->paginate(4);

        return view('front.blog.index', [
            "main_title" => "Results for search criteria \"" . $request['search'] . "\"",
            "posts" => $posts,
            "categories" => $this->getCategories(),
            "tags" => $this->getTags(),
            "latestPosts" => $this->getLatestPosts()
        ]);
    }
    
    public function singleUser(User $user) {
        $posts = User::find($user->id)
                ->posts()
                ->orderBy('created_at', 'DESC')
                ->paginate(4);

        return view('front.blog.index', [
            "author_page_title" => "Posts by user " . $user->name,
            "author_image" => $user->getAvatar(),
            "posts" => $posts,
            "categories" => $this->getCategories(),
            "tags" => $this->getTags(),
            "latestPosts" => $this->getLatestPosts()
        ]);
    }

    public function singlePost(Post $post) {
        return view('front.blog.post', [
            "post" => $post,
            "categories" => $this->getCategories(),
            "tags" => $this->getTags(),
            "latestPosts" => $this->getLatestPosts()
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

    private function getLatestPosts() {
        return $latestPosts = Post::query()
                ->orderBy('created_at', 'DESC')
                ->limit(3)
                ->get();
    }

}
