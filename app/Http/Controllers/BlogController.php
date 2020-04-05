<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\Tag;

class BlogController extends Controller
{
    public function index()
    {  
       $categories = Category::query()
                ->orderBy('name', 'ASC')
                ->get();
       
       $tags = Tag::query()
                ->orderBy('name', 'ASC')
                ->get();
        
       return view('front.blog.index', [
           "categories" => $categories,
           "tags" => $tags
       ]);
    }
}
