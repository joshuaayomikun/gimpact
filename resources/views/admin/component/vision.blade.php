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
                    <button type="button" class="btn btn-info btn-hollow" data-toggle="modal" data-target="#addVisionModal"><i class="icon-floppy-disk m-r-5"></i>Add Vision</button>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">Vision</div>
                    <div class="table-responsive">
                        <table class="table table-striped font-12" id="datatable">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th >Vision</th>
                                    <th >Date Created</th>
                                    <th >Status</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($visions as $vision)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td id="id_td" >{!!$vision->name!!}</td>
                                    <td >{{$vision->created_at}}</td>
                                    <td >
                                        @if( $vision->status == 1)
                                            <a class="badge badge-success" href="{{ route('admin.component.vision.status',$vision->id) }}">
                                            <i class="fa fa-power-off"></i> Is active</a>
                                        @else
                                            <a class="badge badge-danger" href="{{ route('admin.component.vision.status',$vision->id) }}">
                                            <i class="fa fa-power-off"></i> Not active</a>
                                        @endif
                                    </td>
                                    <td >
                                        <a id="edit_vision" class="btn btn-warning btn-lg btn-icon btn-rounded btn-hollow" data-vision-id="{{ $vision['id']}}" data-vision-name="{{ $vision['name']}}"><i class="fa fa-edit"></i></a>
                                        <a id="view_vision" class="btn btn-info btn-lg btn-icon btn-rounded btn-hollow" data-vision-view="{{ $vision['name']}}"><i class="fa fa-edit"></i></a>
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

    <!-- Add Vision Modal -->
    <div class="modal modal-scale fade" id="addVisionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Vision</h4>
            </div>
            <form  method="post" action="{{ route('admin.component.vision.store') }}">
            {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="vision">Vision</label>
                        <textarea class="form-control" name="vision" id="vision" cols="50" rows="10" placeholder="Write Something..." required></textarea>
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
    <!-- End of Add Vision Modal -->

    <!-- Edit Vision Modal -->
    <div class="modal modal-scale fade" id="editVisionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Vision</h4>
            </div>
            <form  method="post" action="{{ route('admin.component.vision.update') }}">
            {{csrf_field()}}
            <input name="vision_id" id="vision_id" value="" required type="hidden">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="vision_name">Vision</label>
                        <textarea class="form-control" value="" name="vision_name" id="vision_name" cols="50" rows="10" placeholder="Write Something..." required></textarea>
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
    <!-- End of Edit Vision Modal -->

    <!-- View Vision Modal -->
    <div class="modal modal-scale fade" id="viewVisionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Vision</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="vision_view">Vision</label>
                    <textarea class="form-control" value="" name="vision_view" id="vision_view" cols="50" rows="10" disabled></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    <!-- End of View Vision Modal -->


    @component('../partials.admin.footer')
    @endcomponent
    
    <script>
        CKEDITOR.replace( 'vision' );
        CKEDITOR.replace( 'vision_name' );
        CKEDITOR.replace( 'vision_view' );

        // $(function()  {
            $('#datatable').DataTable();
        // });

        // $(document).ready(function() {

            //  Script for Edit Vision Modal
            $(document).on('click', '#edit_vision', function(event) {
                $('#editVisionModal').modal('show');

                var vision_id = $(this).data("vision-id");
                var vision_name = $(this).data("vision-name");

                $('input[name="vision_id"]').val(vision_id);
                // $('input[name="vision_name"]').val(vision_name);
                CKEDITOR.instances['vision_name'].setData(vision_name);
            });
            // End Script for Edit Vision Modal

            //  Script for View Vision Modal
            $(document).on('click', '#view_vision', function(event) {
                $('#viewVisionModal').modal('show');

                var vision_view = $(this).data("vision-view");

                CKEDITOR.instances['vision_view'].setData(vision_view);
            });
            // End Script for View Vision Modal
                
        // });
    </script>

    </body>
</html>