<div class="card float-right" style="width: 28%; margin-bottom: 20px ">
    <header>
        <h3 class="card-header">Search the blog</h3>
    </header>
    <form action="{{route('home.posts.search')}}" class="search-form" method="post">
        @csrf
        <div class="input-group card-body">
            <input type="text" class="form-control" placeholder="Search this blog">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="input-group card-body ">
            <select class="form-control selectpicker col-lg-12"  multiple >
                <optgroup label="Titles">
                    @foreach($allPosts as $post)
                    <option>-{{$post->title}}</option>
                    @endforeach
                </optgroup>
                
                <optgroup label="Tags">
                    
                    <option>-</option>
                     
                </optgroup>
                <optgroup label="Authors" data-max-options="2">
                    <option>-{{$post->user}}</option>
                </optgroup>
            </select>
        </div>
        <div class="input-group card-body ">
            <select class="form-control selectpicker col-lg-12">
                <optgroup label="Enabled/Disabled" data-max-options="2">
                    <option>Enable</option>
                    <option>Disable</option>
                </optgroup>
            </select>
        </div>
        <div class="input-group card-body ">
            <select class="form-control selectpicker col-lg-12">
                <optgroup label="Important" data-max-options="2">
                    @foreach($allPosts as $post)
                    <option>{{$post->important}}</option>
                    @endforeach
                </optgroup>
            </select>
        </div>
        <div class="input-group card-body ">
            <select class="form-control selectpicker col-lg-12">
                <optgroup label="Categoreis" data-max-options="2">
                    @foreach($allPosts as $post)
                    <option>{{$post->category->name}}</option>
                    @endforeach
                </optgroup>
            </select>
        </div>
    </form>
</div>

