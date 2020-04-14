@extends('admin._layout.layout')

@section('seo_title', 'Categories')
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

<div class="row">
    <button data-action="show-order" class="btn btn-outline-secondary">
        <i class="fas fa-sort"></i>
        Change Order
    </button>
    <form style="display:none;" id="change-priority-form" class="btn-group" 
          action="{{route('home.categories.update.order')}}" method="post">
        @csrf
        <input type="hidden" name="priorities" value="">

        <button type="submit" class="btn btn-outline-success">
            <i class="fas fa-check"></i>
            @lang('Save Order')
        </button>
        <button type="button" data-action="hide-order" class="btn btn-outline-danger">
            <i class="fas fa-remove"></i>
            @lang('Cancel')
        </button>
    </form>
</div>

@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
    Category with given name already exists!
</div>
@endif
<div class="row" style="margin-top: 30px;">
    <ul class="list-group" id="sortable-list">
        @foreach($categories as $category)
        <li class="list-group-item d-flex justify-content-between align-items-center" data-id="{{$category->id}}">
            <span style="display:none;" class="btn btn-outline-secondary handle">
                <i class="fas fa-sort"></i>
            </span>
            <form action="{{$category->getUpdateUrl()}}" method="post">
                @csrf
                <div class="input-group">
                    <input 
                        type="text" 
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp" 
                        value="{{$category->name}}"
                        style="margin-right: 10px; margin-left: 10px"
                        name="new_category_name">
                    <button type="submit" class="btn btn-info input-group-btn" style="margin-right: 10px">Save change</button>  
                </div>
            </form>
            <a style="margin-right: 10px;" href="{{$category->getFrontUrl()}}" class="btn btn-info">Preview</a>

            <a href="{{$category->getDeleteUrl()}}" class="btn btn-danger">Delete category</a>
            
        </li>
        @endforeach
        </ul>
</div>
@endsection
@push('footer_javascript')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">

    $('#sortable-list').sortable({
        "handle": ".handle",
        "update": function (event, ui) {

            let priorities = $('#sortable-list').sortable('toArray', {
                "attribute": "data-id"
            });

            console.log(priorities);

            $('#change-priority-form [name="priorities"]').val(priorities.join(','));
        }
    });

    $('[data-action="show-order"]').on('click', function (e) {

        $('[data-action="show-order"]').hide();

        $('#change-priority-form').show();

        $('#sortable-list .handle').show();
    });

    $('[data-action="hide-order"]').on('click', function (e) {

        $('[data-action="show-order"]').show();

        $('#change-priority-form').hide();

        $('#sortable-list .handle').hide();

        $('#sortable-list').sortable('cancel');
    });

</script>
@endpush