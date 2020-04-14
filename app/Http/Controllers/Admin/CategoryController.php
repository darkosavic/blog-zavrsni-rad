<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $categories = Category::query()
                ->get();
        return view('admin.partials.categories', [
            'categories' => $categories
        ]);
    }
    
    public function addCategory(Request $request) {
        $category = new Category();
        $category->name = $request['category_name'];
        if(Category::query()->where('name', $request['category_name'])->exists()) {
            $request->session()->flash('error', 'Tag with given name already exists!');
        }else {
           $category->save(); 
        }
        return redirect()->route('home.categories');
    }
    
    public function deleteCategory(Category $category) {
        $category->delete();
        return redirect()->route('home.categories');
    }
    
    public function updateCategory(Request $request, Category $category) {
        $category->name = $request['new_category_name'];
        $category->save();
        return redirect()->route('home.categories');
    }
    
    public function changeOrder(Request $request) {
        $formData = $request->validate([
            'priorities' => ['required', 'string'],
        ]);
        
        $priorities = explode(',', $formData['priorities']);
        foreach ($priorities as $key => $id) {
            $category = Category::findOrFail($id);
            
            $category->priority = $key + 1;
            
            $category->save();
        }
        
        session()->flash('system_message', __('Categories have been reordered!'));
        
        return redirect()->route('home.categories');
    }
}
