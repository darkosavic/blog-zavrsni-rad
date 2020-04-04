<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function blog()
    {  
       return view('front.pages.blog');
    }
    
    public function contact()
    {
        return view('front.pages.contact');
    }
}
