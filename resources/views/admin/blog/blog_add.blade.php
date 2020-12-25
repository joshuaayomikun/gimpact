@component('../partials.admin.header')
@endcomponent
<!-- /.wrapper -->
<body >
<div class="wrapper animsition has-footer">

    @component('../partials.admin.topnav')
    @endcomponent

    @component('../partials.admin.sidenav')
    @endcomponent 
    <!-- Start Main Container -->
    <div class="main-container">

        <div class="content-wrap">

            <div class="panel panel-default">
                <div class="panel-heading font-header">BLOG</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('admin.blog.blog_store') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-horizontal font-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title of Blog</label>
                                <div class="col-sm-10">
                                    <input type="text" name="blog_title" id="blog_title" class="form-control" placeholder="Blog Title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Images or Videos</label>
                                <div class="col-sm-10">
                                    <input type="file" name="blog_file" id="blog_file" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Blog Content</label>
                                <div class="col-sm-10">
                                    <textarea name="blog_content" id="blog_content" class="form-control" placeholder="Write Something..." rows="10" required></textarea>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-main">Submit</button>
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