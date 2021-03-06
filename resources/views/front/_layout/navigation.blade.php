<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
                <div class="close-btn"><i class="icon-close"></i></div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                    <!-- Widget [Search Bar Widget]-->
                    @include('front.blog.partials.search_widget')
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <!-- Navbar Brand --><a href="{{route('front.index.index')}}" class="navbar-brand">Bootstrap Blog</a>
                <!-- Toggle Button-->
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item"><a href="{{route('front.index.index')}}" class="nav-link " >Home</a>
                    </li>
                    <li class="nav-item"><a href="{{route('front.blog.index')}}"  class="nav-link " >Blog</a>
                    </li>
                    <li class="nav-item" ><a href="{{route('front.contact.contact')}}" class="nav-link ">Contact</a>
                    </li>
                    <li  class=" mb-2 bg-info" ><a href="{{route('home')}}" class="nav-link text-white">Login</a>
                    </li>
                </ul>
                <div class="navbar-text"><a href="" class="search-btn"><i class="icon-search-1"></i></a></div>
            </div>
        </div>
    </nav>
</header>

