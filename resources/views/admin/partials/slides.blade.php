@extends('admin._layout.layout')

@section('seo_title', 'Slides')
@section('content')
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Add new index page slide</a>
</p>
<div class="row">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
            <form action="{{route('home.slides.add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Slide title</label>
                    <input 
                        type="text" 
                        class="form-control"
                        id="title"
                        name="title"
                        placeholder="Enter slide title">
                </div>
                <div class="form-group">
                    <label for="btn_text">Button text</label>
                    <input 
                        type="text" 
                        class="form-control"
                        id="btn_text"
                        name="button_text">
                </div>
                <div class="form-group">
                    <label for="url">Button url</label>
                    <input 
                        type="text" 
                        class="form-control"
                        id="url"
                        name="url"
                        placeholder="app or any internet url">
                </div>
                <div class="form-group">
                    <label for="photo">Upload slide background picture</label>
                    <input 
                        type="file"
                        class="form-control-file"
                        name="photo"
                        id="photo">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="row">
    @foreach($slides as $slide)
    <div class="card col-md-4 text-center">
        <img class="card-img-top" src="{{'/storage/slides/' . $slide->photo}}" alt="Card image cap" style="max-width: 256px; align-self: center">
        <div class="card-body">
            <h5 class="card-title">{{$slide->title}}</h5>
            <p class="card-text">Button Text: <strong>{{$slide->button_text}}</strong></p>
            <p class="card-text">Button URL: <strong>{{$slide->url}}</strong></p>
            <p class="card-text">Disabled: 
                <strong>
                    {{$slide->disabled ? 'TRUE' : 'FALSE'}}
                </strong></p>

            <a href="{{route('home.slides.ableDisable', ['slide' => $slide])}}" class="btn btn-primary">DISABLE</a>
            <a href="{{$slide->getDeleteUrl()}}" class="btn btn-primary">DELETE</a>

        </div>
    </div>
    @endforeach
</div>
@endsection