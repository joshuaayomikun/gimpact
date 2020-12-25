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
                <a href="{{ route('admin.team.team_index') }}" ><button type="submit" class="btn btn-grey btn-hollow" ><i class="icon-floppy-disk m-r-5"></i>Go Back</button></a>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">EDIT TEAM DETAILS</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('admin.team.team_update') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-horizontal font-12">

                            <input type="hidden" name="team_id" id="team_id" class="form-control" value="{{$teams->id}}" required>

                            <div class="form-group">
                                <label for="lastname" class="col-sm-2 control-label">Lastname</label>
                                <div class="col-sm-10">
                                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{$teams->lastname}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname"  class="col-sm-2 control-label">Firstname</label>
                                <div class="col-sm-10">
                                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{$teams->firstname}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="othername"  class="col-sm-2 control-label">Othername</label>
                                <div class="col-sm-10">
                                    <input type="text" name="othername" id="othername" class="form-control" value="{{$teams->othername}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="team_post"  class="col-sm-2 control-label">Team Member Position</label>
                                <div class="col-sm-10">
                                    <input type="text" name="team_post" id="team_post" class="form-control" value="{{$teams->team_position}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="team_image">Member's Picture</label>
                                <div class="col-sm-5">
                                    <img src="/storage/images/team/document/{{$teams['team_image']}}"  width="400" height="300">
                                </div>
                            
                                <div class="col-sm-5">
                                    <input type="file" name="team_image" id="team_image" class="form-control" >
                                </div>
                            </div>
                                    
                            <button type="submit" class="btn btn-main pull-right">Update</button>
                        </div>
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