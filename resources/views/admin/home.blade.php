@extends('admin._layout.layout')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <p>You are logged in as {{ Auth::user()->name }}</p>
</div>

@foreach($allPosts as $post)
<div class="card" style="width: 100%; margin-bottom: 20px">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-header">
        <h5 class="card-title">{{$post->title}}</h5>

    </div>
    <div class="card-body">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-3">
                <p class="card-text">CATEGORY: 
                    <strong>{{$post->category->name}}</strong>
                </p>
            </div>
            <div class="col-md-2">
                <p class="card-text">IMPORTANT: 
                    <strong>
                        @if($post->important)
                        YES
                        @else
                        NO
                        @endif
                    </strong></p>
            </div>
            <div class="col-md-2">
                <p class="card-text">DISABLED: 
                    <strong>
                        @if($post->disabled)
                        YES
                        @else
                        NO
                        @endif
                    </strong></p>
            </div>
            <div class="col-md-5">
                <p class="card-text">TAGS:
                    <strong>
                        @foreach($post->tags as $tag)
                        <span>#{{$tag->name}} </span>
                        @endforeach
                    </strong>
                </p>
            </div>
        </div>

        <div class="row card-footer">
            <a href="#" class="card-link" style="margin-right: 10px">Preview post</a>
            <a href="#" class="card-link" style="margin-right: 10px">Edit post</a>
            <a href="#" class="card-link" style="margin-right: 10px">Enable/Disable</a>
            <a href="{{route('home.posts.important', ['post' => $post])}}" class="card-link" style="margin-right: 10px">Set important</a>
            <a href="#" class="card-link" style="margin-right: 10px">Delete post</a>
        </div>
    </div>
</div>
@endforeach
@endsection
