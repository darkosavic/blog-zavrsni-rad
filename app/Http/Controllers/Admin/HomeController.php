<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

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
}
