
<body class="hold-transition sidebar-mini" style="margin-top: 20px">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All Users</h3>
                                    <div class="card-tools">

                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>                  
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th style="width: 20px">Status</th>
                                                <th class="text-center">Photo</th>
                                                <th>Email</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th class="text-center">Created At</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td class="text-center">
                                                    <span class="text-success">
                                                        @if($user->ban)
                                                        Ban
                                                        @else
                                                        Active
                                                        @endif
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <img src="{{$user->getAvatar()}}" style="max-width: 80px;">
                                                </td>
                                                <td>
                                                    {{$user->email}}
                                                </td>
                                                <td>
                                                    <strong>{{$user->name}}</strong>
                                                </td>
                                                <td>
                                                    {{$user->phone_number}}
                                                </td>
                                                <td class="text-center">{{$user->created_at}}</td>
                                                <td class="text-center">
                                                    <div>
                                                        <a href="{{route('home.users.banUser', ['user' => $user])}}" class="btn btn-primary w-100 p-3">Ban user</a>
                                                        <a style="margin-top: 2px;" href="{{$user->getSingleUserUrl()}}" class="btn btn-info w-100 p-3">Preview</a>

                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">

                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->

            <!-- /.modal -->
            <div class="modal fade" id="disable-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Disable User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to disable user?</p>
                            <strong></strong>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-minus-circle"></i>
                                Disable
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <div class="modal fade" id="enable-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Enable User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to enable user?</p>
                            <strong></strong>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success">
                                <i class="fas fa-check"></i>
                                Enable
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <footer class="main-footer">

        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

