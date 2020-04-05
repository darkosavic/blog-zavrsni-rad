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
                    <a href="{{route('front.blog_section.post')}}" class="hero-link">Discover More</a>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url(/themes/front/img/featured-pic-2.jpeg); background-size: cover; background-position: center center" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Bootstrap 4 Blog - Some other title in slide</h1>
                    <a href="{{route('front.blog_section.category')}}" class="hero-link">Checkout More</a>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url(/themes/front/img/featured-pic-3.jpeg); background-size: cover; background-position: center center" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>This is third slide, there will be more!</h1>
                    <a href="{{route('front.blog_section.tag')}}" class="hero-link">Findout More</a>
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
        @foreach($newFeaturedPosts as $newFetaured)
        @include('front.index.post', [
        'newFetaured' => $newFetaured
        ])
        @endforeach
    </div>
</section>
<!-- Divider Section-->
<section style="background: url(/themes/front/img/divider-bg.jpg); background-size: cover; background-position: center bottom" class="divider">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h2>
                <a href="{{route('front.pages.contact')}}" class="hero-link">Contact Us</a>
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