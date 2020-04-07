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
            @include('front.blog.partials.latest_posts', [
            'latestPosts' => $latestPosts
            ])
            <!-- Widget [Categories Widget]-->
            @include('front.blog.partials.categories_widget', [
                'categories' => $categories
            ])
            <!-- Widget [Tags Cloud Widget] -->  
            @include('front.blog.partials.tags_widget', [
                'tags' => $tags
            ])
        </aside>
    </div>
</div>

@endsection