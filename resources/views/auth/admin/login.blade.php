@component('../partials.admin.header')
@endcomponent

	<body class="bg-dark">
    
    <!-- wrapper -->
		<div class="wrapper animsition">

      <div class="container text-center">

        <h1 class="font-header login-header text-upper">Global<span class="text-main">Impact</span></h1>

        <div class="single-wrap">
          <div class="single-inner-padding text-center">
            <h3 class="font-header no-m-t">Login to your account</h3>

            <!-- error and spining -->
            <div class="row">
                <div class="col-sm">
                    <div id="overlay" style="display: none;">
                        <div class="spinner"></div>
                        <br/>
                        <h5>Signing in...</h5>
                    </div>  

                </div>
                <div class="col-sm">
                    <div id="snoAlertBox" class="alert alert-danger" data-alert="alert" ></div>
                </div>
                  <div class="col-sm"></div>
            </div>
            <!-- end of error and spining -->
            <div class="dots-divider m-t-20 center-block"><span class="icon-flickr4"></span></div>


            <form class="adminLoginForm">
            {{csrf_field()}}

                <div class="form-group form-input-group m-t-30 m-b-5">
                    <input type="email" name="email" id="email" class="form-control input-lg font-14" required placeholder="Email Address">
                </div>
                
                
                <div class="form-group form-input-group m-t-30 m-b-5">
                    <input type="password" name="password" id="password" class="form-control input-lg font-14" required placeholder="Password">
                </div>

                <div class="m-l-10 font-11 text-left"><a href="#">Forgot your password?</a></div>
                
                <button type="submit" id="login" class="btn btn-main btn-lg btn-block font-14 m-t-30 ">Submit</button>
            </form>
                    
          </div><!-- /.login-inner -->
        </div><!-- /.login-wrap -->
      </div><!-- /.container -->
    </div>
    <!-- /.wrapper -->
    
    <!-- Jquery -->
  <script src="/assets/backend/js/jquery-1.11.2.min.js"></script> <!-- Bootstrap -->
   
   <script src="/assets/backend/js/bootstrap.min.js"></script> <!-- Modernizr -->
   
   <script src="/assets/backend/js/modernizr.min.js"></script> <!-- Slim Scroll -->
   
   <script src="/assets/backend/js/jquery.slimscroll.min.js"></script> <!-- Animsition -->
   
   <script src="/assets/backend/js/jquery.animsition.min.js"></script> <!-- Sparkline -->
   
   <script src="/assets/backend/js/jquery.sparkline.min.js"></script> <!-- Flot -->
   
   <script src="/assets/backend/js/jquery.flot.min.js"></script> <!-- Simple Calendar -->
   
   <script src="/assets/backend/js/uncompressed/simplecalendar.js"></script> <!-- Skycons -->
   
   <script src='/assets/backend/js/uncompressed/skycons.js'></script> <!-- Noty -->
   
   <script src="/assets/backend/js/jquery.noty.packaged.min.js"></script> <!-- Cookie -->
   
   <script src='/assets/backend/js/uncompressed/jquery.cookie.js'></script> <!-- App -->
   
   <script src="/assets/backend/js/app.min.js"></script> 
   
   <script src="/assets/backend/js/dataTables.bootstrap.min.js"></script>

    <script>

        function closeSnoAlertBox(){
            window.setTimeout(function () {
            $("#snoAlertBox").fadeOut()
            }, 4000);
        } 
        $(document).ready(function(){
            $(".adminLoginForm").submit(function(e){
                $('#overlay').fadeIn();
                e.preventDefault();
                var email = $("#email").val().trim();
                var password = $("#password").val().trim();

                // console.log(email + password);

                if(email.length === 0 || password.length === 0){
                    
                    if(email.length === 0){
                        $('input[type="email"]').css("border","2px solid red");
                        $('input[type="email"]').css("box-shadow","0 0 3px red");
                    }

                    if(password.length === 0){
                        $('input[type="password"]').css("border","2px solid red");
                        $('input[type="passowrd"]').css("box-shadow","0 0 3px red"); 
                    }

                    $('#overlay').fadeOut();
                    $("#snoAlertBox").fadeIn();
                    $('#snoAlertBox').text("Please fill all fields...!!!!!!");
                    closeSnoAlertBox();
                }
                else {
                    $.ajax({
                    url:'{{url("auth/login_admin")}}',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    type:'post',
                    data:{email:email , password:password},
                    success:function(response){
                        $('#overlay').fadeOut();
                        if(response['error'] == true){
                            $("#snoAlertBox").fadeIn();
                            $('#snoAlertBox').text(response['msg']);
                            closeSnoAlertBox();
                        }else{
                            window.location.href = response['redirectPage'];
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        $('#overlay').fadeOut();
                        $("#snoAlertBox").fadeIn();
                        $('#snoAlertBox').text(errorThrown);
                        closeSnoAlertBox();
                    }
                });
                }
            });
        });
    </script>

	</body>
</html>