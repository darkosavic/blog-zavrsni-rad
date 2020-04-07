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
            @include('front.blog.partials.search_widget')
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