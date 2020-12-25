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
                <a href="{{ route('admin.event.event_index') }}" ><button type="submit" class="btn btn-grey btn-hollow" ><i class="icon-floppy-disk m-r-5"></i>Go Back</button></a>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">EDIT EVENT DETAILS</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('admin.event.event_update') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-horizontal font-12">

                            <input type="hidden" name="event_id" id="event_id" class="form-control" value="{{$events->id}}" required>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title of Event</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" id="title" class="form-control" value="{{$events->title}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description"  class="col-sm-2 control-label">Event Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" class="form-control">{{$events->description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="event_image">Image</label>
                                <div class="col-sm-5">
                                    <img src="/storage/images/event/document/{{$events['event_image']}}"  width="400" height="300">
                                </div>
                            
                                <div class="col-sm-5">
                                <input type="file" name="event_image" id="event_image" class="form-control" >
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

    <script>
        CKEDITOR.replace( 'description' );

    </script>

    </body>
</html>