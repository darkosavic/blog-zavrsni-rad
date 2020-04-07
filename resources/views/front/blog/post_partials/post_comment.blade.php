<header>
    <h3 class="h6">Post Comments<span class="no-of-comments">({{count($comments)}})</span></h3>
</header>
@foreach($comments as $comment)
<div class="comment">
    <div class="comment-header d-flex justify-content-between">
        <div class="user d-flex align-items-center">
            <div class="image"><img src="/themes/front/img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title"><strong>{{$comment->commenter}}</strong><span class="date">{{$comment->displayDate()}}</span></div>
        </div>
    </div>
    <div class="comment-body">
        <p>{{$comment->text}}</p>
    </div>
</div>
@endforeach
