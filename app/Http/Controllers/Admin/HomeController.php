<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\User;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $post = Post::query()
                ->orderBy('updated_at', 'DESC')
                ->get();
        return view('admin.home', [
            'allPosts' => $post,
            'categories' => $this->getCategories(),
            'tags' => $this->getTags(),
            'authors' => $this->getUsers()
        ]);
    }
    
    public function comments() {
        $comments = \App\Models\Comment::query()
                ->orderBy('created_at', 'DESC')
                ->get();
        
        return view('admin.partials.comments', [
            'comments' => $comments
        ]);
    }
    
    public function able(Comment $comment) {
        $comment->enabled = !$comment->enabled;
        $comment->save();

        return redirect()->route('home.comments');
    }
    
    private function getCategories() {
        return Category::query()
                        ->where('name', '!=', 'Uncategorized')
                        ->orderBy('name', 'ASC')
                        ->get();
    }

    private function getTags() {
        return Tag::query()
                        ->orderBy('name', 'ASC')
                        ->get();
    }
    
    private function getUsers() {
        return \App\User::query()
                        ->get();
    }
}
