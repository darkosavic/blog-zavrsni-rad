@extends('front._layout.layout')

@section('content')

<div class="container">
    @isset($main_title)
    <h2 class="mb-3">{{$main_title}}</h2>
    @endisset
    <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
            @include('front.blog.partials.main_part', [
            'posts' => $posts
            ])
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