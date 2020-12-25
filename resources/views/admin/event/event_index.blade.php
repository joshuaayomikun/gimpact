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
                    <button type="button" class="btn btn-info btn-hollow" data-toggle="modal" data-target="#addEventModal"><i class="icon-floppy-disk m-r-5"></i>Add Upcoming Events</button>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">Upcoming Events</div>
                    <div class="table-responsive">
                        <table class="table table-striped font-12" id="datatable">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th >Event Title</th>
                                    <th >Description</th>
                                    <th >Image</th>
                                    <th >Status</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td >{{$loop->iteration}}</td>
                                    <td >{{$event->title}}</td>
                                    <td id="id_td">{!!$event->description!!}</td>
                                    <td ><a target="_blank" href="/storage/images/event/document/{{$event['event_image']}}">{{$event->event_image}}</a></td>
                                    <td >
                                        @if( $event->status == 1)
                                            <a class="badge badge-success" href="{{ route('admin.event.event_status',$event->id) }}">
                                            <i class="fa fa-power-off"></i> Is active</a>
                                        @else
                                            <a class="badge badge-danger" href="{{ route('admin.event.event_status',$event->id) }}">
                                            <i class="fa fa-power-off"></i> Not active</a>
                                        @endif
                                    </td>
                                    <td >
                                        <a href="{{ route('admin.event.event_edit',$event->id) }}" class="btn btn-warning btn-lg btn-icon btn-rounded btn-hollow " ><i class="fa fa-edit"></i></a>
                                        <a id="view_event" data-event-view="{{$event->description}}" class="btn btn-info btn-lg btn-icon btn-rounded btn-hollow "><i class="fa fa-edit"></i></a>
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

    <!-- Add Event Modal -->
    <div class="modal modal-scale fade" id="addEventModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Global Impact Events</h4>
            </div>

            <form method="post" action="{{ route('admin.event.event_store') }}" enctype="multipart/form-data">
                {{csrf_field()}}
            
                <div class="modal-body">

                    <div class="form-horizontal font-12">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                            </div>

                            <div class="col-sm-6">
                                <input type="file" name="event_image" id="event_image" class="form-control" placeholder="Image" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-8">
                                <textarea name="description" id="description" class="form-control" required></textarea>
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

    <!-- View Event Modal -->
    <div class="modal modal-scale" id="viewEventModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Event Description</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="event_view">Event</label>
                    <textarea class="form-control" name="event_view" id="event_view" cols="50" rows="10" disabled></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    <!-- End of View Event Modal -->

    <!-- Start Footer -->
    <footer class="footer">
    &copy; 2015. <b>Quantum Admin</b> by <b>Endless Theme</b>
    </footer>
    <!-- End Footer -->


    @component('../partials.admin.footer')
    @endcomponent

    <script>
        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'event_view' );

        //  Script for View Event Modal
        $(document).on('click', '#view_event', function(event) {
                // console.log('this');
                $('#viewEventModal').modal('show');

                var event_view = $(this).data("event-view");

                CKEDITOR.instances['event_view'].setData(event_view);
            });
            // End Script for View Event Modal

    </script>

    </body>
</html>