<div class="widget categories">
    <header>
        <h3 class="h6">Categories</h3>
    </header>
    @foreach($categories as $category)
    <div class="item d-flex justify-content-between">
        <a href="{{$category->getFrontUrl()}}">{{$category->name}}</a>
    <span>{{count($category->posts)}}</span> 
    </div>
    @endforeach
</div>
