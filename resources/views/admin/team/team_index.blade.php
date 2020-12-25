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
                    <button type="button" class="btn btn-info btn-hollow" data-toggle="modal" data-target="#addTeamModal"><i class="icon-floppy-disk m-r-5"></i>Add Team Members</button>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">Team Members</div>
                    <div class="table-responsive">
                        <table class="table table-striped font-12" id="datatable">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Postion</th>
                                    <th class="text-center">Picture Uploaded</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $team)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td class="text-center">{{$team->lastname}} {{$team->firstname}} {{$team->othername}}</td>
                                    <td class="text-center">{{$team->team_position}}</td>
                                    <td class="text-center"><a target="_blank" href="/storage/images/team/document/{{$team['team_image']}}">{{$team->team_image}}</a></td>
                                    <td class="text-center">
                                        @if( $team->status == 1)
                                            <a class="badge badge-success" href="{{ route('admin.team.team_status',$team->id) }}">
                                            <i class="fa fa-power-off"></i> Is active</a>
                                        @else
                                            <a class="badge badge-danger" href="{{ route('admin.team.team_status',$team->id) }}">
                                            <i class="fa fa-power-off"></i> Not active</a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.team.team_edit',$team->id) }}" class="btn btn-info btn-lg btn-icon btn-rounded btn-hollow " ><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.team.team_delete', $team->id) }}" onclick="return confirm('Are you sure you want to delete this Team Member?');" class="btn btn-danger btn-lg btn-icon btn-rounded btn-hollow "><i class="fa fa-trash"></i></a>
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

    <!-- Add Team Modal -->
    <div class="modal modal-scale fade" id="addTeamModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Team</h4>
            </div>

            <form method="post" action="{{ route('admin.team.team_store') }}" enctype="multipart/form-data">
                {{csrf_field()}}
            
                <div class="modal-body">

                    <div class="form-horizontal font-12">
                        <div class="form-group">
                            <!-- <label for="lastname" class="col-sm-1">Lastname</label> -->
                            <div class="col-sm-6">
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" required>
                            </div>

                            <!-- <label for="firstname" class="col-sm-1">Firstname</label> -->
                            <div class="col-sm-6">
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <label for="othername" class="col-sm-1">Othername</label> -->
                            <div class="col-sm-6">
                                <input type="text" name="othername" id="othername" class="form-control" placeholder="Othername">
                            </div>

                            <!-- <label for="team_post" class="col-sm-1">Team Member Position</label> -->
                            <div class="col-sm-6">
                                <input type="text" name="team_post" id="team_post" class="form-control" placeholder="Team Position" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="team_image" class="col-sm-2 control-label">Member's Picture</label>
                            <div class="col-sm-8">
                                <input type="file" name="team_image" id="team_image" class="form-control" required>
                            </div>
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
    <!-- End of Add Team Modal -->

    <!-- Start Footer -->
    <footer class="footer">
    &copy; 2015. <b>Quantum Admin</b> by <b>Endless Theme</b>
    </footer>
    <!-- End Footer -->


    @component('../partials.admin.footer')
    @endcomponent

    </body>
</html>