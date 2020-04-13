<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndexSlide;

class SlidesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $slides = IndexSlide::query()->get();
        
        return view('admin.partials.slides', [
            'slides' => $slides
        ]);
    }
}
