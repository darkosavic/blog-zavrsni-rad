<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $tags = Tag::query()
                ->get();
        return view('admin.partials.tags', [
            'tags' => $tags
        ]);
    }
    
    public function addTag(Request $request) {
        $tag = new Tag();
        $tag->name = $request['tag_name'];
        if(Tag::query()->where('name', $request['tag_name'])->exists()) {
            $request->session()->flash('error', 'Tag with given name already exists!');
        }else {
           $tag->save(); 
        }
        return redirect()->route('home.tags');
    }
    
    public function deleteTag(Tag $tag) {
        $tag->delete();
        return redirect()->route('home.tags');
    }
    
    public function updateTag(Request $request, Tag $tag) {
        $tag->name = $request['new_tag_name'];
        $tag->save();
        return redirect()->route('home.tags');
    }
}
