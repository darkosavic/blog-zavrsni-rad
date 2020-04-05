@extends('front._layout.layout')

@section('content')

<div class="container">
    <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
            <div class="container">
                <div class="row">
                    <!-- post -->
                    <div class="post col-xl-6">
                        <div class="post-thumbnail"><a href="/themes/front/blog-post.html"><img src="/themes/front/img/blog-post-1.jpeg" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date meta-last">20 May | 2016</div>
                                <div class="category"><a href="/themes/front/blog-category.html">Business</a></div>
                            </div><a href="/themes/front/blog-post.html">
                                <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <footer class="post-footer d-flex align-items-center"><a href="/themes/front/blog-author.html" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img src="/themes/front/img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                    <div class="title"><span>John Doe</span></div></a>
                                <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                            </footer>
                        </div>
                    </div>
                    <!-- post             -->
                    <div class="post col-xl-6">
                        <div class="post-thumbnail"><a href="/themes/front/blog-post.html"><img src="/themes/front/img/blog-post-2.jpg" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date meta-last">20 May | 2016</div>
                                <div class="category"><a href="/themes/front/blog-category.html">Business</a></div>
                            </div><a href="/themes/front/blog-post.html">
                                <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <div class="post-footer d-flex align-items-center"><a href="/themes/front/blog-author.html" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img src="/themes/front/img/avatar-2.jpg" alt="..." class="img-fluid"></div>
                                    <div class="title"><span>John Doe</span></div></a>
                                <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                            </div>
                        </div>
                    </div>
                    <!-- post             -->
                    <div class="post col-xl-6">
                        <div class="post-thumbnail"><a href="/themes/front/blog-post.html"><img src="/themes/front/img/blog-post-3.jpeg" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date meta-last">20 May | 2016</div>
                                <div class="category"><a href="/themes/front/blog-category.html">Business</a></div>
                            </div><a href="/themes/front/blog-post.html">
                                <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <div class="post-footer d-flex align-items-center"><a href="/themes/front/blog-author.html" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img src="/themes/front/img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                    <div class="title"><span>John Doe</span></div></a>
                                <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                            </div>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="post col-xl-6">
                        <div class="post-thumbnail"><a href="/themes/front/blog-post.html"><img src="/themes/front/img/blog-post-4.jpeg" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date meta-last">20 May | 2016</div>
                                <div class="category"><a href="/themes/front/blog-category.html">Business</a></div>
                            </div><a href="/themes/front/blog-post.html">
                                <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <div class="post-footer d-flex align-items-center"><a href="/themes/front/blog-author.html" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img src="/themes/front/img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                                    <div class="title"><span>John Doe</span></div></a>
                                <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-template d-flex justify-content-center">
                        <li class="page-item"><a href="/themes/front/#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item"><a href="/themes/front/#" class="page-link active">1</a></li>
                        <li class="page-item"><a href="/themes/front/#" class="page-link">2</a></li>
                        <li class="page-item"><a href="/themes/front/#" class="page-link">3</a></li>
                        <li class="page-item"><a href="/themes/front/#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </main>
        <aside class="col-lg-4">
            <!-- Widget [Search Bar Widget]-->
            <div class="widget search">
                <header>
                    <h3 class="h6">Search the blog</h3>
                </header>
                <form action="blog-search.html" class="search-form">
                    <div class="form-group">
                        <input type="search" placeholder="What are you looking for?">
                        <button type="submit" class="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
            <!-- Widget [Latest Posts Widget]        -->
            <div class="widget latest-posts">
                <header>
                    <h3 class="h6">Latest Posts</h3>
                </header>
                <div class="blog-posts"><a href="/themes/front/blog-post.html">
                        <div class="item d-flex align-items-center">
                            <div class="image"><img src="/themes/front/img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div></a><a href="/themes/front/blog-post.html">
                        <div class="item d-flex align-items-center">
                            <div class="image"><img src="/themes/front/img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div></a><a href="/themes/front/blog-post.html">
                        <div class="item d-flex align-items-center">
                            <div class="image"><img src="/themes/front/img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div></a></div>
            </div>
            <!-- Widget [Categories Widget]-->
            @include('front.blog.partials.categories_widget', [
                'categories' => $categories
            ])
            <!-- Widget [Tags Cloud Widget]-->
            @include('front.blog.partials.tags_widget', [
                'tags' => $tags
            ])
        </aside>
    </div>
</div>

@endsection