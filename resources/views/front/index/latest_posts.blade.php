

<div class="post col-md-4">
    <div class="post-thumbnail"><a href="$latestPost->getPostUrl()"><img src="{{$latestPost->getPhotoUrl()}}" alt="..." class="img-fluid"></a></div>
    <div class="post-details">
        <div class="post-meta d-flex justify-content-between">
            <div class="date">{{$latestPost->displayDateWithPipe()}}</div>
            <div class="category"><a href="{{$latestPost->category->getFrontUrl()}}">{{$latestPost->category->name}}</a></div>
        </div><a href="{{$latestPost->getPostUrl()}}">
            <h3 class="h4">{{$latestPost->title}}</h3></a>
        <p class="text-muted">{{substr($latestPost->preview, 0, 150)}}</p>
    </div>
</div>


