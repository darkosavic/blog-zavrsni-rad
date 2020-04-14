@extends('admin._layout.layout')

@section('seo_title', 'Home')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <p>You are logged in as {{ Auth::user()->name }}</p>
</div>
@include('admin.partials.search', [
    'allPosts' => $allPosts
])
@foreach($allPosts as $post)
<div class="card" style="width: 70%; margin-bottom: 20px">
    <div class="card-header">
        <h5 class="card-title">{{$post->title}}</h5>

    </div>
    <div class="card-body">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-6">
                <img src="{{$post->getPhotoThumbUrl()}}" alt="Card image cap" style="max-width: 256px">
            </div>
            <div class="col-md-6">
                <div class="row p-1">
                    <p class="card-text">CATEGORY: 
                        <strong>{{$post->category->name}}</strong>
                    </p>
                </div>
                <div class="row p-1">
                    <p class="card-text">DISABLED: 
                        <strong>
                            @if($post->disabled)
                            YES
                            @else
                            NO
                            @endif
                        </strong></p>
                </div>
                <div class="row p-1">
                    <p class="card-text">IMPORTANT: 
                        <strong>
                            @if($post->important)
                            YES
                            @else
                            NO
                            @endif
                        </strong></p>
                </div>
                <div class="row p-1">
                    <p class="card-text">TAGS:
                        <strong>
                            @foreach($post->tags as $tag)
                            <span>#{{$tag->name}} </span>
                            @endforeach
                        </strong>
                    </p>
                </div>
                <div class="row p-1">
                    <p class="card-text">Number of views: 
                        <strong>{{$post->numberOfViews}}</strong>
                    </p>
                </div>
                <div class="row p-1">
                    <p class="card-text">Author: 
                        <strong>{{$post->user->name}}</strong>
                    </p>
                </div>
                <div class="row p-1">
                    <p class="card-text">Created at: 
                        <strong>{{$post->displayDateWithPipe()}}</strong>
                    </p>
                </div>
                <div class="row">
                    <p class="card-text">Number of comments: 
                        <strong>{{count($post->comments)}}</strong>
                    </p>
                </div>
            </div>
        </div>

        <div class="row card-footer">
            <a href="{{$post->getPostUrl()}}" class="card-link" style="margin-right: 10px">Preview post</a>
            <a href="{{route('home.posts.update', ['post' => $post])}}" class="card-link" style="margin-right: 10px">Edit post</a>
            <a href="{{route('home.posts.ableDisable', ['post' => $post])}}" class="card-link" style="margin-right: 10px">Enable/Disable</a>
            <a href="{{route('home.posts.important', ['post' => $post])}}" class="card-link" style="margin-right: 10px">Set important</a>
            <a href="{{route('home.posts.delete', ['post' => $post])}}" class="card-link" style="margin-right: 10px">Delete post</a>
        </div>
    </div>
</div>
@endforeach
@endsection
