<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/admin/dashboard')}}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/posts/new')}}">
                    <span data-feather="file"></span>
                    Add Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/slides')}}">
                    <span data-feather="sliders"></span>
                    Index slides
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/comments')}}">
                    <span data-feather="message-square"></span>
                    Comments
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/categories')}}">
                    <span data-feather="more-vertical"></span>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/tags')}}">
                    <span data-feather="tag"></span>
                    Tags
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/users')}}">
                    <span data-feather="users"></span>
                    Users
                </a>
            </li>
        </ul>
    </div>
</nav>
