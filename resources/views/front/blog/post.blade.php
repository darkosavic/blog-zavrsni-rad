@extends('front._layout.layout')

@section('content')

<div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
              <div class="post-thumbnail"><img src="/themes/front/img/blog-post-3.jpeg" alt="..." class="img-fluid"></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                    <div class="category"><a href="{{$post->category->getFrontUrl()}}">{{$post->category->name}}</a></div>
                </div>
                <h1>{{$post->title}}<a href="/themes/front/#"><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="{{$post->user->getSingleUserUrl()}}" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="{{$post->user->getAvatar()}}" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{$post->user->name}}</span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> {{$post->getTimeFormattedForUi()}}</div>
                    <div class="views"><i class="icon-eye"></i> {{$post->numberOfViews}}</div>
                    <div class="comments meta-last"><a href="#post-comments"><i class="icon-comment"></i>{{count($post->comments)}}</a></div>
                  </div>
                </div>
                <div class="post-body">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p> <img src="/themes/front/img/featured-pic-3.jpeg" alt="..." class="img-fluid"></p>
                  <h3>Lorem Ipsum Dolor</h3>
                  <p>div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda temporibus iusto voluptates deleniti similique rerum ducimus sint ex odio saepe. Sapiente quae pariatur ratione quis perspiciatis deleniti accusantium</p>
                  <blockquote class="blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    <footer class="blockquote-footer">Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </footer>
                  </blockquote>
                  <p>quasi nam. Libero dicta eum recusandae, commodi, ad, autem at ea iusto numquam veritatis, officiis. Accusantium optio minus, voluptatem? Quia reprehenderit, veniam quibusdam provident, fugit iusto ullam voluptas neque soluta adipisci ad.</p>
                </div>
                <div class="post-tags">
                    @foreach($post->tags as $tag)
                    <a href="/themes/front/blog-tag.html" class="tag">#{{$tag->name}}</a>
                    @endforeach
                </div>
                <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="/themes/front/#" class="prev-post text-left d-flex align-items-center">
                    <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                    <div class="text"><strong class="text-primary">Previous Post </strong>
                      <h6>I Bought a Wedding Dress.</h6>
                    </div></a><a href="/themes/front/#" class="next-post text-right d-flex align-items-center justify-content-end">
                    <div class="text"><strong class="text-primary">Next Post </strong>
                      <h6>I Bought a Wedding Dress.</h6>
                    </div>
                    <div class="icon next"><i class="fa fa-angle-right">   </i></div></a></div>
                <div class="post-comments" id="post-comments">
                  <!--Post Comment-->
                  @include('front.blog.post_partials.post_comment', [
                    'comments' => $post->comments
                  ])
                </div>
                <div class="add-comment">
                  <header>
                    <h3 class="h6">Leave a reply</h3>
                  </header>
                  <!--Post Form-->
                  @include('front.blog.post_partials.add_comment_form')
                </div>
              </div>
            </div>
          </div>
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