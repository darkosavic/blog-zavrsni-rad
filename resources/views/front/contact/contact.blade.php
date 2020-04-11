@extends('front._layout.layout')

@section('head_scripts')
    {!! htmlScriptTagJsApi(['lang' => 'en']) !!}
@endsection
@section('content')

<!-- Hero Section -->
<section style="background: url(/themes/front/img/hero.jpg); background-size: cover; background-position: center center" class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Have an interesting news or idea? Don't hesitate to contact us!</h1>
            </div>
        </div>
    </div>
</section>
<!--Container Izvezeni-->
<div class="container">
    <div class="row">
        <!-- Latest Posts -->
        
        @include('front.contact.partials.contact_form')
            
        <aside class="col-lg-4">
            <!-- Widget [Contact Widget]-->
            <div class="widget categories">
                <header>
                    <h3 class="h6">Contact Info</h3>
                    <div class="item d-flex justify-content-between">
                        <span>15 Yemen Road, Yemen</span>
                        <span><i class="fa fa-map-marker"></i></span>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <span>(020) 123 456 789</span>
                        <span><i class="fa fa-phone"></i></span>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <span>info@company.com</span>
                        <span><i class="fa fa-envelope"></i></span>
                    </div>
                </header>

            </div>
            @include('front.blog.partials.latest_posts', [
            'latestPosts' => $latestPosts
            ])
        </aside>
    </div>
</div>

@endsection