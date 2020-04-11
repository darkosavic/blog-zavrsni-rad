@extends('admin._layout.layout')

@section('content')

<form>
    <div class="form-group">
        <label for="title">Title</label>
        <input 
            type="text" 
            class="form-control"
            id="title"
            placeholder="Your post title">
    </div>

    <div class="form-group">
        <label for="preview">Preview</label>
        <textarea 
            class="form-control" 
            id="preview" 
            rows="5"
            minlength="50"
            maxlength="500">

        </textarea>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea 
            class="form-control" 
            id="body"
            name="post-body-add">               
        </textarea>
       
    </div>

    <div class="form-group">
        <label for="category">Choose category</label>
        <select class="form-control" id="category">
            @foreach($categories as $category)
            <option>{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tags">Choose tags</label>
        <div id="tags">
            @foreach($tags as $tag)
            <div class="form-check form-check-inline">
                <input 
                    class="form-check-input"
                    type="checkbox"
                    id="tag-{{$tag->name}}"
                    value="{{$tag}}">
                <label class="form-check-label" for="tag-{{$tag->name}}">{{$tag->name}}</label>
            </div>
            @endforeach
        </div>
    </div>

    <div class="form-group">
        <label for="other-options">Other options</label>
        <div id="other-options">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Important</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Disabled</label>
            </div>
        </div>
    </div>
</form>
@endsection
