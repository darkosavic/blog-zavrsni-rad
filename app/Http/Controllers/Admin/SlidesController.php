<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndexSlide;

class SlidesController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $slides = IndexSlide::query()->get();
        return view('admin.partials.slides', [
            'slides' => $slides
        ]);
    }
    
    public function ableDisable(IndexSlide $slide) {
        $slide->disabled = !$slide->disabled;
        $slide->save();

        return redirect()->route('home.slides');
    }

    public function addSlide(Request $request) {
        $slide = new IndexSlide();
        $slide->title = $request['title'];
        $slide->button_text = $request['button_text'];
        $slide->url = $request['url'];
        $slide->photo = 'any.jpg';
        $slide->save();

        $this->handlePhotoUpload($request, $slide);
        
        return redirect()->route('home.slides');
    }

    protected function handlePhotoUpload(Request $request, IndexSlide $slide) {
        if ($request->hasFile('photo')) {


            $slide->deletePhoto();

            $photoFile = $request->file('photo');

            $newPhotoFileName = $slide->id . '_' . $photoFile->getClientOriginalName();

            $photoFile->move(
                    public_path('/storage/slides/'), $newPhotoFileName
            );

            $slide->photo = $newPhotoFileName;

            $slide->save();

            //originalna slika
            \Image::make(public_path('/storage/slides/' . $slide->photo))
                    ->fit(800, 600)
                    ->save();
        }
    }

}
