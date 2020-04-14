<div class="card float-right" style="width: 28%; margin-bottom: 20px ">
    <header>
        <h3 class="card-header">Search the blog</h3>
    </header>
    <form action="{{route('home.posts.search')}}" class="search-form" method="post">
        @csrf
        <div class="input-group card-body">
            <input 
                type="text"
                class="form-control"
                name="search_text"
                placeholder="Search this blog">

            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="input-group card-body">
            <select class="form-control selectpicker col-lg-12" id="category" name="category_id">
                <optgroup label="Categories">
                    <option value="">-- Choose Category --</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </optgroup>
            </select>
        </div>
        <div class="input-group card-body ">
            <select class="form-control selectpicker col-lg-12"  multiple name="tag_id[]">
                <optgroup label="Tags">
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach

                </optgroup>
            </select>
        </div>
        <div class="input-group card-body ">
            <select class="form-control selectpicker col-lg-12" name="author">
                <optgroup label="Categoreis">
                    @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                </optgroup>
            </select>
        </div>

        <div class="input-group card-body">
            <label for="other-options">Other options</label>
            <div id="other-options">
                <div class="form-check form-check-inline">
                    <input 
                        class="form-check-input"
                        type="checkbox"
                        name="important"
                        value="1"
                        <label class="form-check-label" for="inlineCheckbox1">Important</label>
                </div>
                <div class="form-check form-check-inline">
                    <input 
                        class="form-check-input"
                        type="checkbox"
                        name="disabled"
                        <label class="form-check-label" for="inlineCheckbox1">Disabled</label>
                </div>
            </div>
        </div>
        <div class="input-group card-body">

            <button class="btn btn-info btn-secondary" type="submit" >Search</button>
        </div>

    </form>
</div>

