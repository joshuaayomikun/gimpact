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
                <a href="{{ route('admin.blog.blog_index') }}" ><button type="submit" class="btn btn-grey btn-hollow" ><i class="icon-floppy-disk m-r-5"></i>Go Back</button></a>
                </div>
            </div><!-- /.panel -->

            <div class="panel panel-default">
                <div class="panel-heading font-header">EDIT BLOG</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('admin.blog.blog_update') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-horizontal font-12">
                            <input type="hidden" name="blog_id" id="blog_id" class="form-control" value="{{$blogs->id}}" required>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title of Blog</label>
                                <div class="col-sm-10">
                                    <input type="text" name="blog_title" id="blog_title" class="form-control" value="{{$blogs->title}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Images or Videos</label>
                                <!-- <div class="col-sm-10"> -->
                                    <div class="col-sm-5">
                                        <img src="/storage/images/admin/document/{{$blogs['blog_file']}}"  width="400" height="300">
                                    </div>
                                
                                    <div class="col-sm-5">
                                        <input type="file" name="blog_file" id="blog_file" class="form-control " >
                                    </div>
                                <!-- </div> -->
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Blog Content</label>
                                <div class="col-sm-10">
                                    <textarea name="blog_content" id="blog_content" class="form-control" rows="10" required>{{$blogs->content}}</textarea>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-main">Update</button>
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
    
    
    <script>
        CKEDITOR.replace( 'blog_content' );

    </script>

    </body>
</html>