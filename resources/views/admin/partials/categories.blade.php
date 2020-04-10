@extends('admin._layout.layout')

@section('content')
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Add new category</a>
</p>
<div class="row">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
            <form action="{{route('home.categories.add')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category name</label>
                    <input 
                        type="text" 
                        class="form-control"
                        id="exampleInputEmail1"
                        name="category_name"
                        placeholder="Enter tag name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
  Category with given name already exists!
</div>
@endif
<div class="row" style="margin-top: 30px;">
    <ul class="list-group">
        @foreach($categories as $category)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <form action="{{$category->getUpdateUrl()}}" method="post">
                @csrf
                <div class="input-group">
                    <input 
                        type="text" 
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp" 
                        value="{{$category->name}}"
                        style="margin-right: 10px"
                        name="new_category_name">
                    <button type="submit" class="btn btn-info input-group-btn" style="margin-right: 10px">Save change</button>  
                </div>
            </form>

            <a href="{{$category->getDeleteUrl()}}" class="btn btn-danger">Delete category</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection