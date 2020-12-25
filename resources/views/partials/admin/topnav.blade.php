<!-- Start Header -->
  <header class="header-top navbar">
    <div class="navbar-header">

      <a class="navbar-brand" href="/">G<span>lobal Impact</span></a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="headerNavbarCollapse">
      <ul class="nav navbar-nav">
        <li class="hidden-xs"><a href="#" class="font-lg sidenav-size-toggle"><i class="icon-indent-decrease inline-block"></i></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="user-profile dropdown">
          <a href="#" class="clearfix dropdown-toggle" data-toggle="dropdown">
            <div class="user-name">{{auth()->user()->email }}<span class="caret m-l-5"></span></div>
          </a>
          <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
            <li><a href="#editProfileModal" data-toggle="modal" >My Profile</a></li>
            <li><a href="{{ route('auth.logout_admin') }}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </header>
<!-- End Header -->


<!-- Edit profile Modal -->
<div class="modal modal-scale fade" id="editProfileModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Update Profile</h4>
        </div>
        <form  method="post" action="{{ route('admin.user.admin.profile_update') }}">
        {{csrf_field()}}
            <div class="modal-body">

                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" id="lastname" class="form-control " required disabled value="{{ auth()->user()->lastname }}">
                    </div>
                
                    <div class="col-sm-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required disabled value="{{ auth()->user()->firstname }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="othername">Othername</label>
                        <input type="text" class="form-control" name="othername" id="othername" disabled value="{{ auth()->user()->othername }}">
                    </div>
                
                    <div class="col-sm-6">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" required disabled value="{{ auth()->user()->email }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="gender">Gender</label>
                        <br>
                        MALE
                        <input type="radio" id="gender" name="gender" value="M" required>
                        FEMALE
                        <input type="radio" id="gender" name="gender" value="F" required>
                    </div>
                
                    <div class="col-sm-6">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" name="role" id="role" placeholder="Role">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" required placeholder="Write Address..."> {{ auth()->user()->address }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="phone_no">Phone Number</label>
                        <input type="number" class="form-control" name="phone_no" id="phone_no" required value="{{ auth()->user()->phonenumber }}" placeholder="Phone Number">
                    </div>
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
<!-- End of Edit Profile Modal -->


<script>

  $(document).ready(function(){
      // $(".adminLoginForm").submit(function(e){
      //   $(document).on('click', '.edit_mandate', function(event) {
          
              $.ajax({
              url:'{{url("admin/user/admin/profile")}}',
              type:'get',
              success:function(data){
                  console.log(data);
                // $('input[name="role"]').val(courseunit_id);
              },
              error: function () {
                console.log(data);
              }
          });

      // });
  });
</script>
