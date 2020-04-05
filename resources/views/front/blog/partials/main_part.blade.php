<div class="container">
    <div class="row">
        <!-- post -->
        @foreach($posts as $post)
        <div class="post col-xl-6">
            <div class="post-thumbnail"><a href="#"><img src="/themes/front/img/blog-post-1.jpeg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{$post->displayDateWithPipe()}}</div>
                    <div class="category"><a href="/themes/front/blog-category.html">{{$post->category->name}}</a></div>
                </div><a href="/themes/front/blog-post.html">
                    <h3 class="h4">{{$post->title}}</h3></a>
                <p class="text-muted">{{substr($post->body, 0, 100)}}</p>
                <footer class="post-footer d-flex align-items-center"><a href="/themes/front/blog-author.html" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="/themes/front/img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                        <div class="title"><span>John Doe</span></div></a>
                    <div class="date"><i class="icon-clock"></i>{{$post->getTimeFormattedForUi()}}</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>{{count($post->comments)}}</div>
                </footer>
            </div>
        </div>
      @endforeach
    </div>
    <!-- Pagination -->
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-template d-flex justify-content-center">
            {{$posts->links()}}
        </ul>
    </nav>
</div>