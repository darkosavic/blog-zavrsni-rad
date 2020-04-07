<div class="widget latest-posts">
    <header>
        <h3 class="h6">Latest Posts</h3>
    </header>
    @foreach($latestPosts as $post)
    <div class="blog-posts"><a href="/themes/front/blog-post.html">
            <div class="item d-flex align-items-center">
                <div class="image"><img src="/themes/front/img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                <div class="title"><strong>{{($post->title)}}</strong>
                    <div class="d-flex align-items-center">
                        <div class="views"><i class="icon-eye"></i> {{$post->numberOfViews}}</div>
                        <div class="comments"><i class="icon-comment"></i>{{count($post->comments)}}</div>
                    </div>
                </div>
            </div></a></div>
    @endforeach
</div>