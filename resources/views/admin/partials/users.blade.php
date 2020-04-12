@extends('admin._layout.layout')

@section('seo_title', 'Users')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">

        <!--Your Profile-->
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Your profile</h1>
                            </div>
                            <div class="col-sm-6 w-100 p-3">
                                <p >
                                    <a class="btn btn-primary w-100 p-3"
                                       data-toggle="collapse"
                                       href="#multiCollapseExample1"
                                       role="button"
                                       aria-expanded="false"
                                       aria-controls="multiCollapseExample1"
                                       >Add new user</a>
                                </p>
                            </div>

                            @if(session()->has('error'))
                            <div class="alert alert-danger" role="alert">
                                Tag with given name already exists!
                            </div>
                            @endif
                        </div>

                    </div><!-- /.container-fluid -->
                </section>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{ Auth::user()->getAvatar() }}" class="mh-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{ Auth::user()->email }}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i>{{ Auth::user()->phone_number }}
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>{{ Auth::user()->created_at }}</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!--End Your Profile-->
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">User name</label>
                            <input 
                                type="text" 
                                class="form-control"
                                id="exampleInputEmail1"
                                name="tag_name"
                                placeholder="Enter tag name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input 
                                type="text" 
                                class="form-control"
                                id="exampleInputEmail1"
                                name="tag_name"
                                placeholder="Enter tag name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input 
                                type="text" 
                                class="form-control"
                                id="exampleInputEmail1"
                                name="tag_name"
                                placeholder="Enter tag name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone number</label>
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
    </div>   
</div>
@include('admin.partials.users_list')

@endsection