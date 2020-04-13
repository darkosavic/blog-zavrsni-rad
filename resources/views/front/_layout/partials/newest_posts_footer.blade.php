@foreach($newestPosts as $newestPost)
<div class="latest-posts">
    <a href="{{$newestPost->getPostUrl()}}">
        <div class="post d-flex align-items-center">
            <div class="image"><img src="{{$newestPost->getPhotoThumbUrl()}}" alt="..." class="img-fluid"></div>
            <div class="title">
                <strong>{{$newestPost->title}}</strong>
                <span class="date last-meta">{{$newestPost->displayDateForFooterPost()}}</span>
            </div>
        </div>
    </a> 
</div>
@endforeach