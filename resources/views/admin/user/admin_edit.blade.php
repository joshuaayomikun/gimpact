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
                <a href="{{ route('admin.user.admin.index') }}" ><button type="submit" class="btn btn-grey btn-hollow" ><i class="icon-floppy-disk m-r-5"></i>Go Back</button></a>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">EDIT ADMIN</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('admin.user.admin.update') }}" >
                    {{csrf_field()}}
                            <input type="hidden" name="admin_id" id="admin_id" class="form-control" value="{{$admin->id}}" required>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control " required value="{{$admin->lastname}}">
                                </div>
                            
                                <div class="col-sm-6">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" class="form-control " required value="{{$admin->firstname}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="othername">Othername</label>
                                    <input type="text" class="form-control" name="othername" id="othername" class="form-control " value="{{$admin->othername}}">
                                </div>
                            
                                <div class="col-sm-6">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" class="form-control " required value="{{$admin->email}}">
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
                                        @foreach($roles as $role)
                                            <option value="{{$role['id']}}" <?php if($role['id'] == $admin['role_id']){ ?> selected <?php  } ?> > {{$role['name']}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            </br>
                            <button type="submit" class="btn btn-main ">Update</button>
                        </div><!-- /.form-horizontal -->
                    </form>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->

        </div>
    </div>
    <!-- End Main Container -->

    <!-- Start Footer -->
    <footer class="footer">
    &copy; 2015. <b>Quantum Admin</b> by <b>Endless Theme</b>
    </footer>
    <!-- End Footer -->


    @component('../partials.admin.footer')
    @endcomponent
    
    </body>
</html>