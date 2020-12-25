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
                    <button type="button" class="btn btn-info btn-hollow" data-toggle="modal" data-target="#addMissionModal"><i class="icon-floppy-disk m-r-5"></i>Add Mission</button>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">Mission</div>
                    <div class="table-responsive">
                        <table class="table table-striped font-12" id="datatable">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Mission</th>
                                    <th>Date Created</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($missions as $mission)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td  id="id_td" >{!!$mission->name!!}</td>
                                    <td>{{$mission->created_at}}</td>
                                    <td>
                                        @if( $mission->status == 1)
                                            <a class="badge badge-success" href="{{ route('admin.component.mission.status',$mission->id) }}">
                                            <i class="fa fa-power-off"></i> Is active</a>
                                        @else
                                            <a class="badge badge-danger" href="{{ route('admin.component.mission.status',$mission->id) }}">
                                            <i class="fa fa-power-off"></i> Not active</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a id="edit_mission" class="btn btn-warning btn-lg btn-icon btn-rounded btn-hollow" data-mission-id="{{ $mission['id']}}" data-mission-name="{{ $mission['name']}}"><i class="fa fa-edit"></i></a>
                                        <a id="view_mission" class="btn btn-info btn-lg btn-icon btn-rounded btn-hollow" data-mission-view="{{ $mission['name']}}"><i class="fa fa-edit"></i></a>
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

    <!-- Add Mission Modal -->
    <div class="modal modal-scale fade" id="addMissionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Mission</h4>
            </div>
            <form  method="post" action="{{ route('admin.component.mission.store') }}">
            {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mission">Mission</label>
                        <textarea class="form-control" name="mission" id="mission" cols="50" rows="10" placeholder="Write Something..." required></textarea>
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
    <!-- End of Add Mission Modal -->

    <!-- Edit Mission Modal -->
    <div class="modal modal-scale fade" id="editMissionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Mission</h4>
            </div>
            <form  method="post" action="{{ route('admin.component.mission.update') }}">
            {{csrf_field()}}
            <input name="mission_id" id="mission_id" value="" required type="hidden">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mission_name">Mission</label>
                        <textarea class="form-control" value="" name="mission_name" id="mission_name" cols="50" rows="10" placeholder="Write Something..." required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main">Update</button>
                </div>
            </form>
          </div>
        </div>
    </div>
    <!-- End of Edit Mission Modal -->

    <!-- View Mission Modal -->
    <div class="modal modal-scale" id="viewMissionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Mission</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="mission_view">Mission</label>
                    <textarea class="form-control" name="mission_view" id="mission_view" cols="50" rows="10" disabled></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    <!-- End of View Mandate Modal -->


    @component('../partials.admin.footer')
    @endcomponent
    
    <script>
        CKEDITOR.replace( 'mission' );
        CKEDITOR.replace( 'mission_name' );
        CKEDITOR.replace( 'mission_view' );

        // $(function()  {
            $('#datatable').DataTable();
        // });

        // $(document).ready(function() {

            //  Script for Edit Mission Modal
            $(document).on('click', '#edit_mission', function(event) {
                $('#editMissionModal').modal('show');

                var mission_id = $(this).data("mission-id");
                var mission_name = $(this).data("mission-name");

                $('input[name="mission_id"]').val(mission_id);
                // $('input[name="mission_name"]').val(mission_name);
                CKEDITOR.instances['mission_name'].setData(mission_name);
            });
            // End Script for Edit Mission Modal

            //  Script for View Mission Modal
            $(document).on('click', '#view_mission', function(event) {
                $('#viewMissionModal').modal('show');

                var mission_view = $(this).data("mission-view");

                CKEDITOR.instances['mission_view'].setData(mission_view);
            });
            // End Script for View Mission Modal
                
        // });
    </script>

    </body>
</html>