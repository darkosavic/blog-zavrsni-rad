@extends('front._layout.layout')

@section('seo_title', 'Home Page')
@section('seo_description', 'Welcome to Blog, here you can find out all about the most current topics')
@section('seo_image', url('/themes/front/img/featured-pic-1.jpeg'))

@section('content')
<!-- Hero Section-->
<div id="index-slider" class="owl-carousel">
    @foreach($indexSlides as $slide)
    <section style="background: url({{'/storage/slides/' . $slide->photo}}); background-size: cover; background-position: center center" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>{{$slide->title}}</h1>
                    <a href="{{$slide->url}}" class="hero-link">{{$slide->button_text}}</a>
                </div>
            </div>
        </div>
    </section>
    @endforeach
</div>

<!-- Intro Section-->
<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="h3">Some great intro here</h2>
                <p class="text-big">Place a nice <strong>introduction</strong> here <strong>to catch reader's attention</strong>.</p>
            </div>
        </div>
    </div>
</section>
<section class="featured-posts no-padding-top">
    <div class="container">
        <!-- Post-->
        @isset($newFeaturedPosts[0])
        <div class="row d-flex align-items-stretch">
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                    <div class="content">
                        <header class="post-header">
                            <div class="category"><a href="{{$newFeaturedPosts[0]->category->getFrontUrl()}}">{{$newFeaturedPosts[0]->category->name}}</a></div><a href="{{$newFeaturedPosts[0]->getPostUrl()}}">
                                <h2 class="h4">{{$newFeaturedPosts[0]->title}}</h2></a>
                        </header>
                        <p>{{$newFeaturedPosts[0]->getBodyPreview()}}</p>
                        <footer class="post-footer d-flex align-items-center"><a href="{{$newFeaturedPosts[0]->user->getSingleUserUrl()}}" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="{{$newFeaturedPosts[0]->user->getAvatar()}}" alt="..." class="img-fluid"></div>
                                <div class="title"><span>{{$newFeaturedPosts[0]->user->name}}</span></div></a>
                            <div class="date"><i class="icon-clock"></i>{{$newFeaturedPosts[0]->getTimeFormattedForUi()}}</div>
                            <div class="comments"><i class="icon-comment"></i>{{$newFeaturedPosts[0]->numberOfViews}}</div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="image col-lg-5"><img src="{{$newFeaturedPosts[0]->getPhotoUrl()}}" alt="..."></div>
        </div>
        @endisset
        @isset($newFeaturedPosts[1])
        <div class="row d-flex align-items-stretch">
            <div class="image col-lg-5"><img src="{{$newFeaturedPosts[1]->getPhotoUrl()}}" alt="..."></div>
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                    <div class="content">
                        <header class="post-header">
                            <div class="category"><a href="{{$newFeaturedPosts[1]->category->getFrontUrl()}}">{{$newFeaturedPosts[1]->category->name}}</a></div><a href="{{$newFeaturedPosts[1]->getPostUrl()}}">
                                <h2 class="h4">{{$newFeaturedPosts[1]->title}}</h2></a>
                        </header>
                        <p>{{$newFeaturedPosts[1]->getBodyPreview()}}</p>
                        <footer class="post-footer d-flex align-items-center"><a href="{{$newFeaturedPosts[1]->user->getSingleUserUrl()}}" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="{{$newFeaturedPosts[1]->user->getAvatar()}}" alt="..." class="img-fluid"></div>
                                <div class="title"><span>{{$newFeaturedPosts[1]->user->name}}</span></div></a>
                            <div class="date"><i class="icon-clock"></i>{{$newFeaturedPosts[1]->getTimeFormattedForUi()}}</div>
                            <div class="comments"><i class="icon-comment"></i>{{$newFeaturedPosts[1]->numberOfViews}}</div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        @endisset
        @isset($newFeaturedPosts[2])
        <div class="row d-flex align-items-stretch">
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                    <div class="content">
                        <header class="post-header">
                            <div class="category"><a href="{{$newFeaturedPosts[2]->category->getFrontUrl()}}">{{$newFeaturedPosts[2]->category->name}}</a></div><a href="{{$newFeaturedPosts[2]->getPostUrl()}}">
                                <h2 class="h4">{{$newFeaturedPosts[2]->title}}</h2></a>
                        </header>
                        <p>{{$newFeaturedPosts[2]->getBodyPreview()}}</p>
                        <footer class="post-footer d-flex align-items-center"><a href="{{$newFeaturedPosts[2]->user->getSingleUserUrl()}}" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="{{$newFeaturedPosts[2]->user->getAvatar()}}" alt="..." class="img-fluid"></div>
                                <div class="title"><span>{{$newFeaturedPosts[2]->user->name}}</span></div></a>
                            <div class="date"><i class="icon-clock"></i>{{$newFeaturedPosts[2]->getTimeFormattedForUi()}}</div>
                            <div class="comments"><i class="icon-comment"></i>{{$newFeaturedPosts[2]->numberOfViews}}</div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="image col-lg-5"><img src="{{$newFeaturedPosts[2]->getPhotoUrl()}}" alt="..."></div>
        </div>
        @endisset
    </div>


</section>
<!-- Divider Section-->
<section style="background: url(/themes/front/img/divider-bg.jpg); background-size: cover; background-position: center bottom" class="divider">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h2>
                <a href="{{route('front.contact.contact')}}" class="hero-link">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Posts -->
<section class="latest-posts"> 
    <div class="container">
        <header> 
            <h2>Latest from the blog</h2>
            <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </header>
        <div class="owl-carousel" id="latest-posts-slider">
            <div class="row child-div">
                @foreach($latestPosts as $latestPost)
                @include('front.index.latest_posts', [
                'latestPost' => $latestPost
                ])
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--Gallery Section-->
<section class="gallery no-padding">
    <div class="row">


        @foreach($allGaleryImages as $galeryImage)
        @include('front.index.single_galery_image', [
        'galeryImage' => $galeryImage
        ])
        @endforeach
    </div>
</section>
@endsection