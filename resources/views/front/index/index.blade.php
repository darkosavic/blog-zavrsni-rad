@extends('front._layout.layout')

<!--@section('seo_title', 'Index Page')-->

@section('content')
<!-- Hero Section-->
<div id="index-slider" class="owl-carousel">
    <section style="background: url(/themes/front/img/featured-pic-1.jpeg); background-size: cover; background-position: center center" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Bootstrap 4 Blog - A free template by Bootstrap Temple</h1>
                    <a href="/themes/front/blog-post.html" class="hero-link">Discover More</a>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url(/themes/front/img/featured-pic-2.jpeg); background-size: cover; background-position: center center" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Bootstrap 4 Blog - Some other title in slide</h1>
                    <a href="/themes/front/blog-category.html" class="hero-link">Checkout More</a>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url(/themes/front/img/featured-pic-3.jpeg); background-size: cover; background-position: center center" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>This is third slide, there will be more!</h1>
                    <a href="/themes/front/blog-tag.html" class="hero-link">Findout More</a>
                </div>
            </div>
        </div>
    </section>
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
        <div class="row d-flex align-items-stretch">
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                    <div class="content">
                        <header class="post-header">
                            <div class="category"><a href="/themes/front/blog-category.html">Business</a></div><a href="/themes/front/blog-post.html">
                                <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
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
        <!-- Post        -->
        <div class="row d-flex align-items-stretch">
            <div class="image col-lg-5"><img src="/themes/front/img/featured-pic-2.jpeg" alt="..."></div>
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                    <div class="content">
                        <header class="post-header">
                            <div class="category"><a href="/themes/front/blog-category.html">Business</a></div><a href="/themes/front/blog-post.html">
                                <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <footer class="post-footer d-flex align-items-center"><a href="/themes/front/blog-author.html" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="/themes/front/img/avatar-2.jpg" alt="..." class="img-fluid"></div>
                                <div class="title"><span>John Doe</span></div></a>
                            <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                            <div class="comments"><i class="icon-comment"></i>12</div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        <!-- Post                            -->
        <div class="row d-flex align-items-stretch">
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                    <div class="content">
                        <header class="post-header">
                            <div class="category"><a href="/themes/front/blog-category.html">Business</a></div><a href="/themes/front/blog-post.html">
                                <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <footer class="post-footer d-flex align-items-center"><a href="/themes/front/blog-author.html" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="/themes/front/img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                <div class="title"><span>John Doe</span></div></a>
                            <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                            <div class="comments"><i class="icon-comment"></i>12</div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="image col-lg-5"><img src="/themes/front/img/featured-pic-3.jpeg" alt="..."></div>
        </div>
    </div>
</section>
<!-- Divider Section-->
<section style="background: url(/themes/front/img/divider-bg.jpg); background-size: cover; background-position: center bottom" class="divider">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h2>
                <a href="/themes/front/contact.html" class="hero-link">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Posts -->

<!-- Gallery Section-->
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