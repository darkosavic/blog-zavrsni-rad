<div class="container">
    <div class="row">
        <!-- post -->
        @foreach($posts as $post)
        <div class="post col-xl-6">
            <div class="post-thumbnail"><a href="{{$post->getPostUrl()}}"><img src="{{$post->getPhotoUrl()}}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{$post->displayDateWithPipe()}}</div>
                    <div class="category"><a href="{{$post->category->getFrontUrl()}}">{{$post->category->name}}</a></div>
                </div><a href="{{$post->getPostUrl()}}">
                    <h3 class="h4">{{$post->title}}</h3></a>
                <p class="text-muted">{{substr($post->body, 0, 100)}}</p>
                <footer class="post-footer d-flex align-items-center"><a href="{{$post->user->getSingleUserUrl()}}" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="{{$post->user->getAvatar()}}" alt="..." class="img-fluid"></div>
                        <div class="title"><span>{{$post->user->name}}</span></div></a>
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