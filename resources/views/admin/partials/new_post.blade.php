@extends('admin._layout.layout')

@section('seo_title', 'New Post')
@section('content')
{{$errors}}
<form action="{{route('home.posts.new.submit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input 
            type="text" 
            class="form-control"
            id="title"
            name="title"
            placeholder="Your post title">
    </div>

    <div class="form-group">
        <label for="preview">Preview</label>
        <textarea 
            class="form-control" 
            id="preview" 
            name="preview"
            rows="5"
            minlength="50"
            maxlength="500">

        </textarea>
    </div>
    <div class="form-group">
        <label for="upload_image">Upload featuring picture</label>
        <input 
            type="file"
            class="form-control-file"
            name="photo"
            id="photo">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea 
            class="form-control" 
            id="body"
            name="body"
            rows="15">               
        </textarea>

    </div>

    <div class="form-group">
        <label for="category">Choose category</label>
        <select class="form-control" id="category" name="category_id">
            <option value="{{$defaultCategory->id}}">-- Choose Category --</option>
            @foreach($categories as $category)
            <option 
                value="{{$category->id}}"
                @if($category->id == old('category_id'))
                selected
                @endif>
                {{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tags">Choose tags</label>
        <select 
            name="tag_id[]"
            class="form-control" 
            multiple
            >
            @foreach($tags as $tag)
            <option 
                value="{{$tag->id}}"
                @if(
                is_array(old('tag_id'))
                && in_array($tag->id, old('tag_id'))
                )
                selected
                @endif
                >{{$tag->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="other-options">Other options</label>
        <div id="other-options">
            <div class="form-check form-check-inline">
                <input 
                    class="form-check-input"
                    type="checkbox"
                    name="important"
                    value="1"
                    @if(1 == old('important'))
                    checked
                    @endif>
                    <label class="form-check-label" for="inlineCheckbox1">Important</label>
            </div>
            <div class="form-check form-check-inline">
                <input 
                    class="form-check-input"
                    type="checkbox"
                    name="disabled"
                    value="1"
                    @if(1 == old('disabled'))
                    checked
                    @endif>
                    <label class="form-check-label" for="inlineCheckbox1">Disabled</label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit post</button>
</form>
@endsection
