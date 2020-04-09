<div class="widget search">
    <header>
        <h3 class="h6">Search the blog</h3>
    </header>
    <form action="{{route('front.blog.search')}}" class="search-form" method="post">
        @csrf
        <div class="form-group">
            <input type="search" placeholder="What are you looking for?" name="search">
            <button type="submit" class="submit"><i class="icon-search"></i></button>
        </div>
    </form>
</div>

