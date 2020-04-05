<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogSectionController extends Controller
{
    public function tag() {
        return view('front.blog_section.tag');
    }
    public function search() {
        return view('front.blog_section.search');
    }
    public function post() {
        return view('front.blog_section.post');
    }
    public function category() {
        return view('front.blog_section.category');
    }
    public function author() {
        return view('front.blog_section.author');
    }
}
