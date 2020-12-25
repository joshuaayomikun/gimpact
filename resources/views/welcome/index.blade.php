@component('../partials.frontend.header')
@endcomponent
<body>
  <!-- wrapper -->
    <div class="wrapper animsition">

        @component('../partials.frontend.topnav')
        @endcomponent

        <!-- Start Main Container -->
        <div class="main-container">

            <section class="carousel-section-container" >
                <div class="carousel slide" data-ride="carousel" id="myCarousel" >
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class"active"></li> 
                        <li data-target="#myCarousel" data-slide-to="1" class""></li> 
                        <li data-target="#myCarousel" data-slide-to="2" class""></li> 
                    </ol>
                    <div class="carousel-inner" >

                        <div class="item active">
                            <img src="/assets/frontend/img/slide_bg1.jpg" style="width:100%; height:450px !important" >
                            <div class="carousel-caption">
                                <h1><strong>HEALTH MANAGEMENT SYSTEM</strong></h1>
                                <h5 class="white-text" style="color:blanchedalmond"><strong>We have a moral obligation to get healthcare to people who need it.</strong></h5>
                            </div>
                        </div>

                        <div class="item">
                            <img src="/assets/frontend/img/slide_bg2.jpg" style="width:100%; height:450px !important" >
                            <div class="carousel-caption">
                                <h1><strong>Over 1,000</strong></h1>
                                <h5 class="white-text"
                                style="color:blanchedalmond"><strong>Over 1,000 Health specialist &amp; health institutions available</strong></h5>
                            </div>
                        </div>

                        <div class="item">
                            <img src="/assets/frontend/img/slide_bg3.jpg" style="width:100%; height:450px !important" >
                            <div class="carousel-caption">
                                <h1><strong>Latest News &amp; Articles</strong></h1>
                                <h5 class="white-text" style="color:blanchedalmond"><strong>Health summaries</strong></h5>
                                <h5 class="white-text" style="color:blanchedalmond"><strong>Resources and articles</strong></h5>
                            </div>
                        </div>
                    </div><!-- Left and right controls -->

                    <a class="left carousel-control" data-slide="prev" href="#myCarousel"> <span class="sr-only">Previous</span></a> 
                    <a class="right carousel-control" data-slide="next" href="#myCarousel"> <span class="sr-only">Next </span></a>
                </div>
            </section>

            <!-- Mandate -->
            <div class="section section-padding section-bordered text-center"
                id="mandateSection">
                <div class="container">

                <h2 class="font-light font-header no-m-t text-dark section-heading">What is Global Impact's Mandate?</h2>
                @if($mandate)
                    <h5 class="font-16 line-24 m-t-20 waypoint-animated-element animated" data-animation="fadeInLeft">{!!$mandate->name!!}</h5>
                @else
                    <h3 class="font-light font-header no-m-t text-dark section-heading">No Mandate Yet...</h3>
                @endif
                
                </div><!-- /.container -->
            </div><!-- /.section -->
            <!-- End of Mandate -->

            <!-- Upcoming Events -->
            <div class="section section-padding bg-light text-center no-p-b" id="eventSection">

                <div class="container">
                    <h2 class="font-light font-header no-m-t text-dark section-heading">Upcoming Events</h2>
                    <div class="carousel slide" data-ride="carousel" id="myCarousel" >
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class"active"></li> 
                            <li data-target="#myCarousel" data-slide-to="1" class""></li> 
                            <li data-target="#myCarousel" data-slide-to="2" class""></li> 
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img alt=""
                                    class="img-circle review-author m-t-20"
                                    src="/assets/frontend/img/slide_bg1.jpg" style="width:300px; height:300px !important">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                    <div class="carousel-caption m-t-30 text-dark">
                                        These are some list of our Upcoming Events
                                    </div>
                                    </div>
                                </div>
                                <div class="m-t-30 text-dark">
                                    <b class="block">Events</b> 
                                </div>
                            </div>
                            @if(count($events) > 0)
                                @foreach($events as $event)
                                <div class="item">
                                    <img alt=""
                                        class="img-circle review-author m-t-20"
                                        src="/storage/images/event/document/{{$event['event_image']}}" style="width:300px; height:300px !important">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                        <div class="carousel-caption m-t-30 text-dark">
                                            {!!$event->description!!}
                                        </div>
                                        </div>
                                    </div>
                                    <div class="m-t-30 text-dark">
                                        <b class="block">{{$event->title}}</b> 
                                    </div>
                                </div><!-- /.review-item -->
                                @endforeach
                            @else
                            <h3 class="font-light font-header no-m-t text-dark section-heading">No Events Yet...</h3>
                            @endif
                        </div><!-- /.review-item -->
                    </div>
                </div>

            </div><!-- /.section -->
            <!-- End of Upcoming Events -->

            <!-- Vision And Mission -->
            <div class="section section-bordered section-padding no-p-b" id="vimiSection">
                
                <div class="container">
                <div class="row">

                    <!-- Vision -->
                    <div class="col-md-8">
                    <h2 class="font-light font-header no-m-t section-heading">OUR VISION</h2>
                    @if($vision)
                        <p class="font-16 line-24 m-t-20">{!!$vision->name!!}</p>
                    @else
                        <h3 class="font-light font-header no-m-t text-dark section-heading">No Vision Yet...</h3>
                    @endif
                    </div><!-- /.col -->
                    <!-- End of Vision -->

                    <!-- Mision -->
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <h2 class="font-light font-header no-m-t section-heading waypoint-animated-element animated" data-animation="fadeInRight">OUR MISSION</h2>
                        @if($mission)
                            <h5 class="font-16 line-24 m-t-20 waypoint-animated-element animated" data-animation="fadeInRight">{!!$mission->name!!}</h5>
                        @else
                            <h3 class="font-light font-header no-m-t text-dark section-heading">No Mission Yet...</h3>
                        @endif
                    </div><!-- /.col -->
                    <!-- End of Mission -->

                </div><!-- /.row -->
                </div>
            </div><!-- /.section -->
            <!-- End of Vision And Mission -->
            
            <!-- Blog -->
            <div class="section section-padding bg-light" id="blogSection">                
                <div class="container">
                    <h2 class="font-header no-m-t section-heading text-center">Our Recent Posts</h2>
                    <div class="row m-t-40">

                        @if(count($blogs) > 0)
                            @foreach($blogs as $blog)
                            <div class="col-md-4">
                            <div class="blog-home-wrap waypoint-animated-element animated" data-animation="bounceIn">
                                <div class="blog-img hover-element">
                                <img alt="" class="img-responsive" src="/storage/images/admin/document/{{$blog['blog_file']}}" style="width:100%; height:200px !important">
                                <div class="hover-overlay">
                                    <div class="hover-action">
                                    <a class="btn btn-main btn-lg btn-rounded btn-icon animsition-link"
                                        href="blog_single.html"></a>
                                    </div>
                                </div>
                                </div>
                                <div class="font-header m-t-30 h4">
                                    {{$blog['title']}}
                                </div>
                                <a class="font-12 m-t-5" href="#">Read More</a>
                                <!-- <p class="line-24 m-t-20">{!!$blog->content!!}</p> -->
                            </div>
                            </div>
                            @endforeach
                        @else
                            <h3 class="font-light font-header no-m-t text-dark text-center section-heading">No Blogs Yet...</h3>
                        @endif

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section -->
            <!-- End of Blog -->

            <!-- Team -->
            <div class="section section-padding text-center section-bordered" id="teamSection">
                <div class="container">
                    <h2 class="font-header no-m-t section-heading">Meet Our Team</h2>
                    <p class="font-16 line-24">These are the Executive Members the Lord has put together for his work.</p>
                    <div class="row m-t-40">
                        <div class="col-md-10 col-md-offset-1">
                        <div class="row">

                            @if(count($teams) > 0)
                                @foreach($teams as $team)
                                <div class="col-sm-6 col-md-3">
                                <div class="team-wrap text-center waypoint-animated-element animated"
                                    data-animation="flipInX">
                                    <img alt=""
                                        class="profile-pic img-circle img-responsive center-block"
                                        src="/storage/images/team/document/{{$team['team_image']}}" style="width:150px; height:150px !important">
                                    <div class="font-header m-t-10">
                                    {{$team->lastname}} {{$team->firstname}} {{$team->othername}}
                                    </div><i class="text-muted block font-12"><b>{{$team->team_position}}</b></i> 
                                </div>
                                </div>
                                @endforeach
                            @else
                                <h3 class="font-light font-header no-m-t text-dark section-heading">No Team Yet...</h3>
                            @endif

                        </div><!-- /.row -->
                        {{$teams->links()}}
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section -->
            <!-- End of Team -->
            
            <footer class="footer bg-gray2" id="contactSection">
                <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center">
                    <h4 class="text-upper text-white"><b>Global</b>Impacts</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-9 text-center-xs m-t-30-xs">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="font-header text-upper">
                                    Email
                                </div>
                                <ul class="list-unstyled m-t-5 line-24">
                                    <li>
                                        endless.themes@gmail.com
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 m-t-15-xs">
                                <div class="font-header text-upper">
                                    Address
                                </div>
                                <address>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107
                                </address>
                            </div>
                            <div class="col-sm-4 m-t-15-xs">
                                <div class="font-header text-upper">
                                    Phone
                                </div>
                                <ul class="list-unstyled m-t-5 line-24">
                                    <li>
                                        (123) 456-7890
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <hr>
                <div class="text-center">
                    <a class="text-white"
                        href="#"></a> <a class="text-white m-l-5"
                        href="#"></a> <a class="text-white m-l-5"
                        href="#"></a>
                    <div class="m-t-15">
                    &copy; 2020. <b class="text-white">Global Impacts</b> 
                    </div>
                </div>
                </div><!-- /.container -->
            </footer>
        </div><!-- End Main Container -->
    </div><!-- /.wrapper -->
  
@component('../partials.frontend.footer')
@endcomponent
</body>
</html>
