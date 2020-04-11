
<div class="row">
    <div class="post col-md-4">
        <div class="post-thumbnail"><a href="{{$firstPost->getPostUrl()}}"><img src="/themes/front/img/blog-1.jpg" alt="..." class="img-fluid"></a></div>
        <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
                <div class="date">{{$firstPost->displayDateWithPipe()}}</div>
                <div class="category"><a href="{{$firstPost->category->getFrontUrl()}}">{{$firstPost->category->name}}</a></div>
            </div><a href="{{$firstPost->getPostUrl()}}">
                <h3 class="h4">{{$firstPost->title}}</h3></a>
            <p class="text-muted">{{substr($firstPost->preview, 0, 150)}}</p>
        </div>
    </div>
    <div class="post col-md-4">
        <div class="post-thumbnail"><a href="{{$secondPost->getPostUrl()}}"><img src="/themes/front/img/blog-1.jpg" alt="..." class="img-fluid"></a></div>
        <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
                <div class="date">{{$secondPost->displayDateWithPipe()}}</div>
                <div class="category"><a href="{{$secondPost->category->getFrontUrl()}}">{{$secondPost->category->name}}</a></div>
            </div><a href="{{$secondPost->getPostUrl()}}">
                <h3 class="h4">{{$secondPost->title}}</h3></a>
            <p class="text-muted">{{substr($secondPost->preview, 0, 150)}}</p>
        </div>
    </div>
    <div class="post col-md-4">
        <div class="post-thumbnail"><a href="{{$thirdPost->getPostUrl()}}"><img src="/themes/front/img/blog-1.jpg" alt="..." class="img-fluid"></a></div>
        <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
                <div class="date">{{$thirdPost->displayDateWithPipe()}}</div>
                <div class="category"><a href="{{$thirdPost->category->getFrontUrl()}}">{{$thirdPost->category->name}}</a></div>
            </div><a href="{{$thirdPost->getPostUrl()}}">
                <h3 class="h4">{{$thirdPost->title}}</h3></a>
            <p class="text-muted">{{substr($thirdPost->preview, 0, 150)}}</p>
        </div>
    </div>
</div>

