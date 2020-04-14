<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class PostController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function setImportant(Post $post) {
        $post->important = !$post->important;
        $post->save();

        return redirect()->route('home');
    }

    public function ableDisable(Post $post) {
        $post->disabled = !$post->disabled;
        $post->save();

        return redirect()->route('home');
    }

    public function idnexNew() 
    {
        $uncategorized = Category::query()->where('name', 'Uncategorized')->first();
        return view('admin.partials.new_post', [
            'tags' => $this->getTags(),
            'categories' => $this->getCategories(),
            'defaultCategory' => $uncategorized
        ]);
    }

    public function addPost(Request $request) {
        // validation
        $formData = $this->validateData($request);
        $post = new Post();
        $post->fill($formData);
        $post->user_id = \Illuminate\Support\Facades\Auth::user()->id;
        $post->imageUrl = "/themes/front/img/blog-post-3.jpeg";
        $post->save();
        $this->handlePhotoUpload($request, $post);

        $post->tags()->sync($formData['tag_id']);

        return redirect()->route('home');
    }

    public function updatePost(Request $request, Post $post) {
        $formData = $this->validateData($request);

        $post->fill($formData);
        $post->save();
        $this->handlePhotoUpload($request, $post);
        
        $post->tags()->sync($formData['tag_id']);

        return redirect()->route('home');
    }

    public function deletePost(Post $post) {
        $post->delete();
        \DB::table('tag_post')
                ->where('post_id', '=', $post->id)
                ->delete();

        return redirect()->route('home');
    }

    public function openEditPost(Post $post) {

        return view('admin.partials.edit_post', [
            'post' => $post,
            'tags' => $this->getTags(),
            'categories' => $this->getCategories()
        ]);
    }

    public function search(Request $request) {
        $posts = Post::query()
                ->where('title', 'LIKE', '%' . $request['search'] . '%')
                ->orWhere('body', 'LIKE', '%' . $request['search'] . '%')
                ->orderBy('created_at', 'DESC')
                ->get();

        return view('admin.home', [
            'allPosts' => $posts
        ]);
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

    private function validateData(Request $request) {
        return $request->validate([
                    'title' => ['required', 'string', 'max:255'],
                    'preview' => ['required', 'string', 'min:50', 'max:500'],
                    'body' => ['required', 'string'],
                    'important' => ['nullable', 'boolean'],
                    'disabled' => ['nullable', 'boolean'],
                    'category_id' => ['nullable', 'numeric', 'exists:categories,id'],
                    'tag_id' => ['required', 'array', 'exists:tags,id'],
                    'photo' => ['required', 'file', 'image']
        ]);
    }

    protected function handlePhotoUpload(Request $request, Post $post) {
        if ($request->hasFile('photo')) {

            $post->deletePhoto();

            $photoFile = $request->file('photo');

            $newPhotoFileName = $post->id . '_' . $photoFile->getClientOriginalName();

            $photoFile->move(
                    public_path('/storage/posts/'), $newPhotoFileName
            );

            $post->imageUrl = $newPhotoFileName;

            $post->save();

            //originalna slika
            \Image::make(public_path('/storage/posts/' . $post->imageUrl))
                    ->save();

            //thumb slika
            \Image::make(public_path('/storage/posts/' . $post->imageUrl))
                    ->fit(256, 256)
                    ->save(public_path('/storage/posts/thumbs/' . $post->imageUrl));
        }
    }

}
