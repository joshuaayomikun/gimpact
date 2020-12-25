@component('../partials.admin.header')
@endcomponent

<body >
<!-- /.wrapper -->
<div class="wrapper animsition has-footer">

    @component('../partials.admin.topnav')
    @endcomponent

    @component('../partials.admin.sidenav')
    @endcomponent 
    <!-- Start Main Container -->
    <div class="main-container">

        <div class="content-wrap">
            <!-- /. button panel -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <button type="button" class="btn btn-info btn-hollow" data-toggle="modal" data-target="#editProfileModal"><i class="icon-floppy-disk m-r-5"></i>Add Admin</button>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">Admin</div>
                    <div class="table-responsive">
                        <table class="table table-striped font-12" id="datatable">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $admin)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td class="text-center">{{$admin->lastname}} {{$admin->firstname}} {{$admin->othername}}</td>
                                    <td class="text-center">{{$admin->email}}</td>
                                    <td class="text-center">{{$admin->gender}}</td>
                                    <td class="text-center">{{$admin->role->name}}</td>
                                    <td class="text-center">
                                        @if( $admin->status == 1)
                                            <a class="badge badge-success" href="{{ route('admin.user.admin.status',$admin->id) }}">
                                            <i class="fa fa-power-off"></i> Is active</a>
                                        @else
                                            <a class="badge badge-danger" href="{{ route('admin.user.admin.status',$admin->id) }}">
                                            <i class="fa fa-power-off"></i> Not active</a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.user.admin.edit', $admin->id) }}" class="btn btn-info btn-lg btn-icon btn-rounded btn-hollow" ><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Main Container -->

    <!-- Add Admin Modal -->
    <div class="modal modal-scale fade" id="addAdminModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Add Admin</h4>
            </div>
            <form  method="post" action="{{ route('admin.user.admin.store') }}">
            {{csrf_field()}}
                <div class="modal-body">

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="lastname">Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control " required placeholder="Lastname">
                        </div>
                    
                        <div class="col-sm-6">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" class="form-control " required placeholder="Firstname">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="othername">Othername</label>
                            <input type="text" class="form-control" name="othername" id="othername" class="form-control " placeholder="Othername">
                        </div>
                    
                        <div class="col-sm-6">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" class="form-control " required placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="gender">Gender</label>
                            <br>
                            MALE
                            <input type="radio" id="gender" name="gender" value="M" >
                            FEMALE
                            <input type="radio" id="gender" name="gender" value="F" >
                        </div>
                    
                        <div class="col-sm-6">
                            <label for="role">Role</label>
                            <select name="role" class="form-control" id="role" required>
                                <option selected>Select Role</option>
                                @foreach($roles as $role)
                                    <option value="{{$role['id']}}" > {{$role->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main">Submit</button>
                </div>
            </form>
          </div>
        </div>
    </div>
    <!-- End of Add Admin Modal -->
    

    <!-- Start Footer -->
    <footer class="footer">
    &copy; 2015. <b>Quantum Admin</b> by <b>Endless Theme</b>
    </footer>
    <!-- End Footer -->


    @component('../partials.admin.footer')
    @endcomponent
    
    <script>

        $(function()  {
            $('#datatable').DataTable();
        });

    </script>

    </body>
</html>