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
        <div class="page-header font-header">Blogs</div>
        <ol class="breadcrumb">
          <li><a href="#">Blog</a></li>
          <li class="active">Blog List</li>
        </ol>

        <div class="content-wrap">
        <div class="panel panel-default">
                <div class="panel-heading font-header">Blog</div>
                    <div class="table-responsive">
                        <table class="table table-striped font-12" id="datatable">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th >Blog Title</th>
                                    <th >Blog Content</th>
                                    <th >Picture Uploaded</th>
                                    <th >Status</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td id="id_td">{!!$blog->content!!}</td>
                                    <td ><a target="_blank" href="/storage/images/admin/document/{{$blog['blog_file']}}">{{$blog->blog_file}}</a></td>
                                    <td >
                                        @if( $blog->status == 1)
                                            <a class="badge badge-success" href="{{ route('admin.blog.blog_status',$blog->id) }}">
                                            <i class="fa fa-power-off"></i> Is active</a>
                                        @else
                                            <a class="badge badge-danger" href="{{ route('admin.blog.blog_status',$blog->id) }}">
                                            <i class="fa fa-power-off"></i> Not active</a>
                                        @endif
                                    </td>
                                    <td >
                                        <a href="{{ route('admin.blog.blog_edit',$blog->id) }}" class="btn btn-warning btn-lg btn-icon btn-rounded btn-hollow " ><i class="fa fa-edit"></i></a>
                                        <a id="view_blog" data-blog-view="{{$blog->content}}" class="btn btn-info btn-lg btn-icon btn-rounded btn-hollow " ><i class="fa fa-edit"></i></a>
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

    <!-- View Blog Modal -->
    <div class="modal modal-scale" id="viewBlogModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Blog Content</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="blog_view">Blog</label>
                    <textarea class="form-control" name="blog_view" id="blog_view" cols="50" rows="10" disabled></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    <!-- End of View Blog Modal -->

    @component('../partials.admin.footer')
    @endcomponent

    
    <script type="text/javascript">
        CKEDITOR.replace( 'blog_view' );

        // $(function()  {
            $('#datatable').DataTable();
        // });

        // $(document).ready(function() {

            //  Script for View Blog Modal
            $(document).on('click', '#view_blog', function(event) {
                // console.log('this');
                $('#viewBlogModal').modal('show');

                var blog_view = $(this).data("blog-view");

                // $('textarea[view="blog_view"]').val(blog_view);
                CKEDITOR.instances['blog_view'].setData(blog_view);
            });
            // End Script for View Blog Modal
                
        // });
    </script>

    </body>
</html>