@extends('front._layout.layout')

@section('seo_title', 'Blog Post')
@section('seo_og_type', 'post')

@section('head_meta')
<meta property="book:author" content="{{$post->user->name}}" />
<meta property="og:type" content="@yield('seo_og_type', 'article')" />
@endsection
@section('content')
<div class="container">
    <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
            <div class="container">
                <div class="post-single">
                    <div class="post-thumbnail"><img src="{{$post->getPhotoUrl()}}" alt="..." class="img-fluid"></div>
                    <div class="post-details">
                        <div class="post-meta d-flex justify-content-between">
                            <div class="category"><a href="{{$post->category->getFrontUrl()}}">{{$post->category->name}}</a></div>
                        </div>
                        <h1>{{$post->title}}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
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
                            <p class="lead">{{$post->preview}}</p>
                            <div id="post-body">{!!$post->body!!} </div>
                        </div>
                        <div class="post-tags">
                            @foreach($post->tags as $tag)
                            <a href="{{$tag->getFrontUrl()}}" class="tag">#{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                            @isset($previousPost)
                            <a href="{{$previousPost->getPostUrl()}}" class="prev-post text-left d-flex align-items-center">

                                <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                                <div class="text"><strong class="text-primary">Previous Post </strong>
                                    <h6>{{$previousPost->title}}</h6>
                                </div></a>
                            @endisset
                            @isset($nextPost)
                            <a href="{{$nextPost->getPostUrl()}}" class="next-post text-right d-flex align-items-center justify-content-end">

                                <div class="text"><strong class="text-primary">Next Post </strong>
                                    <h6>{{$nextPost->title}}</h6>
                                </div>
                                <div class="icon next"><i class="fa fa-angle-right">   </i></div>

                            </a>
                            @endisset
                        </div>
                        <div class="post-comments" id="post-comments">

                        </div>
                        <div class="add-comment">
                            <header>
                                <h3 class="h6">Leave a reply</h3>
                            </header>
<!--                            Post Form-->
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

@push('footer_javascript')
<script type="text/javascript">

    function refreshComments() {

        // ajax funkcija vraca PROMISE 
        $.ajax({
            "url": "{{route('front.blog.post.comments', ['post' => $post])}}",
            "type": "get", //http method GET ili POST
            "data": {}
        }).done(function (response) {

            $('#post-comments').html(response);
            console.log('Zavrseno ucitavanje najnovijih postova');
            //console.log(response);
        }).fail(function (jqXHR, textStatus, error) {
            console.log('Greska prilikom ucitavanja najnovijih postova');
        });
    }

    refreshComments();
    function addComment(username, email, usercomment) {
        $.ajax({

            "url": "{{$post->getSendCommentUrl()}}",
            "type": "POST",
            "data": {
                "_token": "{{csrf_token()}}", //obavezno u Laravelu
                "username": username,
                "email": email,
                "usercomment": usercomment
            }

        }).done(function (response) {

            console.log(response);

            //alert(response.system_message);

            refreshComments();
            $('#add-new-comment [name="username"]').text('');
            $('#add-new-comment [name="email"]').text('');
            $('#add-new-comment [name="usercomment"]').text('');


        }).fail(function () {
            console.log('Neuspesno dodavanje komentara');
        });
    }

    $('#add-new-comment').on('submit', function (e) {

        e.preventDefault();
        e.stopPropagation();

        let username = $('#add-new-comment [name="username"]').val();
        let email = $('#add-new-comment [name="email"]').val();
        let usercomment = $('#add-new-comment [name="usercomment"]').val();

        addComment(username, email, usercomment);
    });

</script>
@endpush


@section('tag_meta')
<meta property="og:title" content="{{$tag->name}}" />
@endsection