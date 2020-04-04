@extends('front._layout.layout')


@section('content')

<!-- Hero Section -->
<section style="background: url(img/hero.jpg); background-size: cover; background-position: center center" class="hero">
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
        <main class="col-lg-8"> 
            <div class="container">
                <form action="#" class="commenting-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Your Name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" placeholder="Email Address (will not be published)" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea placeholder="Type your message" class="form-control" rows="20"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-secondary">Submit Your Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
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
            <div class="widget latest-posts">
                <header>
                    <h3 class="h6">Latest Posts</h3>
                </header>
                <div class="blog-posts"><a href="blog-post.html">
                        <div class="item d-flex align-items-center">
                            <div class="image"><img src="img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div></a><a href="blog-post.html">
                        <div class="item d-flex align-items-center">
                            <div class="image"><img src="img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div></a><a href="blog-post.html">
                        <div class="item d-flex align-items-center">
                            <div class="image"><img src="img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div></a></div>
            </div>
        </aside>
    </div>
</div>

@endsection