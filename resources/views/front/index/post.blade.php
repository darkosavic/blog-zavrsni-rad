<div class="row d-flex align-items-stretch">
    <div class="text col-lg-7">
        <div class="text-inner d-flex align-items-center">
            <div class="content">
                <header class="post-header">
                    <div class="category"><a href="/themes/front/blog-category.html">{{$newFetaured->category_id}}</a></div><a href="/themes/front/blog-post.html">
                        <h2 class="h4">{{$newFetaured->title}}</h2></a>
                </header>
                <p>{{$newFetaured->body}}</p>
                <footer class="post-footer d-flex align-items-center"><a href="/themes/front/blog-author.html" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="/themes/front/img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                        <div class="title"><span>John Doe</span></div></a>
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
            </div>
        </div>
    </div>
    <div class="image col-lg-5"><img src="/themes/front/img/featured-pic-1.jpeg" alt="..."></div>
</div>
