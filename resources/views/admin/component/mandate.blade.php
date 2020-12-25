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
                    <button type="button" class="btn btn-info btn-hollow" data-toggle="modal" data-target="#addMandateModal"><i class="icon-floppy-disk m-r-5"></i>Add Mandate</button>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">Mandate</div>
                    <div class="table-responsive">
                        <table class="table table-striped font-12" id="datatable">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th >Mandate</th>
                                    <th >Date Created</th>
                                    <th >Status</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mandates as $mandate)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td id="id_td" >{!!$mandate->name!!}</td>
                                    <td >{{$mandate->created_at}}</td>
                                    <td >
                                        @if( $mandate->status == 1)
                                            <a class="badge badge-success" href="{{ route('admin.component.mandate.status',$mandate->id) }}">
                                            <i class="fa fa-power-off"></i> Is active</a>
                                        @else
                                            <a class="badge badge-danger" href="{{ route('admin.component.mandate.status',$mandate->id) }}">
                                            <i class="fa fa-power-off"></i> Not active</a>
                                        @endif
                                    </td>
                                    <td >
                                        <a class="btn btn-warning btn-lg btn-icon btn-rounded btn-hollow edit_mandate" data-mandate-id="{{ $mandate['id']}}" data-mandate-name="{{ $mandate['name']}}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-info btn-lg btn-icon btn-rounded btn-hollow view_mandate" data-mandate-view="{{ $mandate['name']}}"><i class="fa fa-edit"></i></a>
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

    <!-- Add Mandate Modal -->
    <div class="modal modal-scale fade" id="addMandateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Mandate</h4>
            </div>
            <form  method="post" action="{{ route('admin.component.mandate.store') }}">
            {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mandate">Mandate</label>
                        <textarea class="form-control" name="mandate" id="mandate" cols="50" rows="10" placeholder="Write Something..." required></textarea>
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
    <!-- End of Add Mandate Modal -->

    <!-- Edit Mandate Modal -->
    <div class="modal modal-scale" id="editMandateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Mandate</h4>
            </div>
            <form  method="post" action="{{ route('admin.component.mandate.update') }}">
            {{csrf_field()}}
            <input name="mandate_id" id="mandate_id" value="" required type="hidden">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mandate_name">Mandate</label>
                        <textarea class="form-control" name="mandate_name" id="mandate_name" cols="50" rows="10" placeholder="Write Something..." required></textarea>
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
    <!-- End of Edit Mandate Modal -->

    <!-- View Mandate Modal -->
    <div class="modal modal-scale" id="viewMandateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Mandate</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="mandate_view">Mandate</label>
                    <textarea class="form-control" name="mandate_view" id="mandate_view" cols="50" rows="10" disabled></textarea>
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

    <script type="text/javascript">
        CKEDITOR.replace( 'mandate' );
        CKEDITOR.replace( 'mandate_name' );
        CKEDITOR.replace( 'mandate_view' );

        // $(function()  {
            $('#datatable').DataTable();
        // });

        // $(document).ready(function() {

            //  Script for Edit Mandate Modal
            $(document).on('click', '.edit_mandate', function(event) {
                // console.log('this');
                $('#editMandateModal').modal('show');

                var mandate_id = $(this).data("mandate-id");
                var mandate_name = $(this).data("mandate-name");

                $('input[name="mandate_id"]').val(mandate_id);
                // $('textarea[name="mandate_name"]').val(mandate_name);
                CKEDITOR.instances['mandate_name'].setData(mandate_name);
            });
            // End Script for Edit Mandate Modal

            //  Script for View Mandate Modal
            $(document).on('click', '.view_mandate', function(event) {
                // console.log('this');
                $('#viewMandateModal').modal('show');

                var mandate_view = $(this).data("mandate-view");

                // $('textarea[view="mandate_view"]').val(mandate_view);
                CKEDITOR.instances['mandate_view'].setData(mandate_view);
            });
            // End Script for View Mandate Modal
                
        // });
    </script>
    </body>
</html>

