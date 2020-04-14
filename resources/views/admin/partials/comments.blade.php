@extends('admin._layout.layout')

@section('seo_title', 'Comments')
@section('content')
<div class="row">
    @foreach($comments as $comment)
    <div class="card col-md-12">
        <div class="card-body">
            <h5 class="card-title">{{$comment->post->title}}</h5>
            <p class="card-text">Commenter: <strong>{{$comment->commenter}}</strong></p>
            <p class="card-text">Text: <strong>{{$comment->text}}</strong></p>
            <p class="card-text">Disabled: 
                <strong>
                    {{$comment->enabled ? 'ENABLED' : 'DISABLED'}}
                </strong></p>

            <a href="#" class="btn btn-primary">Enable/Disable</a>

        </div>
    </div>
    @endforeach
@endsection