@extends('admin._layout.layout')

@section('seo_title', 'Posts')
@section('content')
<p>
    <a class="btn btn-primary"
       data-toggle="collapse"
       href="#multiCollapseExample1"
       role="button"
       aria-expanded="false"
       aria-controls="multiCollapseExample1"
       >Add new tag</a>
</p>
<div class="row">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
            <form action="{{route('home.tags.add')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tag name</label>
                    <input 
                        type="text" 
                        class="form-control"
                        id="exampleInputEmail1"
                        name="tag_name"
                        placeholder="Enter tag name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
  Tag with given name already exists!
</div>
@endif
<div class="row" style="margin-top: 30px;">
    <ul class="list-group">
        @foreach($tags as $tag)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <form action="{{$tag->getUpdateUrl()}}" method="post">
                @csrf
                <div class="input-group">
                    <input 
                        type="text" 
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp" 
                        value="{{$tag->name}}"
                        style="margin-right: 10px"
                        name="new_tag_name">
                    <button type="submit" class="btn btn-info input-group-btn" style="margin-right: 10px">Save change</button>  
                </div>
            </form>

            <a href="{{$tag->getDeleteUrl()}}" class="btn btn-danger">Delete tag</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection