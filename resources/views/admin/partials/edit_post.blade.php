@extends('admin._layout.layout')

@section('seo_title', 'Edit Post')
@section('content')
{{$errors}}
<form action="{{route('home.posts.update.submit', [
      'post' => $post
      ])}}" method="post" >
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input 
            type="text" 
            class="form-control"
            id="title"
            name="title"
            value="{{$post->title}}">
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
            {{$post->preview}}
        </textarea>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea 
            class="form-control" 
            id="body"
            name="body"
            rows="15"> 
            {{$post->body}}
        </textarea>

    </div>

    <div class="form-group">
        <label for="category">Choose category</label>
        <select class="form-control" id="category" name="category_id">
            <option value="">-- Choose Category --</option>
            @foreach($categories as $category)
            <option 
                value="{{$category->id}}"
                @if($post->category->id == $category->id))
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
                    @if($post->important)
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
                    @if($post->disabled)
                    checked
                    @endif>
                    <label class="form-check-label" for="inlineCheckbox1">Disabled</label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit post</button>
</form>
@endsection
