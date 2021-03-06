@extends('admin._layout.layout')

@section('seo_title', 'Users')
@section('content')


<!------ Include the above in your HEAD tag ---------->

<div class="card p-4 w-100">
    <div class="row">

        <!--Your Profile-->
        <div class="card col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Your profile</h1>
                            </div>
                            <div class="col-sm-6 p-0">
                                <a style="margin-top: 20px;" href="{{Auth::user()->getSingleUserUrl()}}" class="btn btn-info  float-right p-3">Preview</a>
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
                        <img src="{{ Auth::user()->getAvatar() }}" class="mh-100" alt="Responsive image" style="max-width: 150px;">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{ Auth::user()->email }}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i>{{ Auth::user()->phone_number }}
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>{{ Auth::user()->created_at }}</p>
                        <p >
                            <a class="btn btn-primary w-100 p-3"
                               data-toggle="collapse"
                               href="#add-user-form"
                               role="button"
                               aria-expanded="false"
                               aria-controls="add-user-form"
                               >Add new</a>

                        </p>
                        <p >
                            <a class="btn btn-primary w-100 p-3"
                               data-toggle="collapse"
                               href="#edit-user-form"
                               role="button"
                               aria-expanded="false"
                               aria-controls="edit-user-form"
                               >Edit profile</a>
                        </p>
                        <p >
                            <a class="btn btn-primary w-100 p-3"
                               data-toggle="collapse"
                               href="#change-password-form"
                               role="button"
                               aria-expanded="false"
                               aria-controls="change-password-form"
                               >Change password</a>
                        </p>
                    </div>
                </div>
            </div>

            <!--End Your Profile-->
        </div>
        <div class="col-sm-6 col-md-6">
            <!--add user--> 
            <div class="collapse multi-collapse" id="add-user-form">
                <div class="card card-body">
                    <form action="{{route('home.users.add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="user_name">User name</label>
                            <input 
                                type="text" 
                                class="form-control"
                                id="user_name"
                                name="name"
                                placeholder="Enter user name">
                        </div>
                        <div class="form-group">
                            <label for="user_email">Email address</label>
                            <input 
                                type="email" 
                                class="form-control"
                                id="user_email"
                                name="email"
                                placeholder="example@any.com">
                        </div>
                        <div class="form-group">
                            <label for="user_phone">Phone number</label>
                            <input 
                                type="text" 
                                class="form-control"
                                id="user_phone"
                                name="phone_number">
                        </div>
                        <div class="form-group">
                            <label for="upload_image">Upload profile picture</label>
                            <input 
                                type="file"
                                class="form-control-file"
                                name="photo"
                                id="photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!--edit user-->
            <div class="collapse multi-collapse" id="edit-user-form">
                <div class="card card-body">
                    <form action="{{route('home.users.edit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="user_name">User name</label>
                            <input 
                                type="text" 
                                class="form-control"
                                id="user_name"
                                name="name"
                                value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="user_email">Email address</label>
                            <input 
                                type="email" 
                                class="form-control"
                                id="user_email"
                                name="email"
                                value="{{Auth::user()->email}}">
                        </div>
                        <div class="form-group">
                            <label for="user_phone">Phone number</label>
                            <input 
                                type="text" 
                                class="form-control"
                                id="user_phone"
                                name="phone_number"
                                value="{{Auth::user()->phone_number}}">
                        </div>
                        <div class="form-group">
                            <label for="upload_image">Upload profile picture</label>
                            <input 
                                type="file"
                                class="form-control-file"
                                name="photo"
                                id="photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- change password -->
            <div class="collapse multi-collapse" id="change-password-form">
                <div class="card card-body">
                    <form action="{{route('home.users.change_password')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="old_password">Old password</label>
                            <input 
                                type="password" 
                                class="form-control"
                                id="old_password"
                                name="old_password">
                        </div>
                        <div class="form-group">
                            <label for="new_password">New password</label>
                            <input 
                                type="password" 
                                class="form-control"
                                id="new_password"
                                name="new_password">
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