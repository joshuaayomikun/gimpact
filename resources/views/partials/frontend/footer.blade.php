<script type="text/javascript" src="/assets/frontend/revolution/js/video.min.js"></script>
<script type="text/javascript" src="/assets/frontend/revolution/js/slideanims.min.js"></script>
<script type="text/javascript" src="/assets/frontend/revolution/js/layeranimation.min.js"></script>
<script type="text/javascript" src="/assets/frontend/revolution/js/kenburn.min.js"></script>
<script type="text/javascript" src="/assets/frontend/revolution/js/navigation.min.js"></script>
<script type="text/javascript" src="/assets/frontend/revolution/js/parallax.min.js"></script>

<!-- Jquery -->
<script src="/assets/frontend/js/jquery-1.11.2.min.js"></script> <!-- Bootstrap -->
   
<script src="/assets/frontend/bootstrap/bootstrap.min.js"></script> <!-- Modernizr -->

<script src="/assets/frontend/js/modernizr.min.js"></script> <!-- Animsition -->

<script src="/assets/frontend/js/jquery.animsition.min.js"></script> <!-- Isotope -->

<script src="/assets/frontend/js/isotope.pkgd.min.js"></script> <!-- Owl Carousel -->

<script src="/assets/frontend/js/owl.carousel.min.js"></script> <!-- Scroll To -->

<script src="/assets/frontend/js/jquery.scrollTo.min.js"></script> <!-- Local Scroll -->

<script src="/assets/frontend/js/jquery.localScroll.min.js"></script> <!-- Waypoint -->

<script src="/assets/frontend/js/jquery.waypoints.min.js"></script> <!-- Revolution Slider -->

<script src="/assets/frontend/revolution/js/jquery.themepunch.tools.min.js"></script> 
<script src="/assets/frontend/revolution/js/jquery.themepunch.revolution.min.js"></script> <!-- App -->

<script src="/assets/frontend/js/app.js"></script> 
<script>

    $(function()  {
        $(window).load(function() {
        //Add Filter function to portfolios
        var portfolioGroup = $('.portfolio-grid').isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows',
            transitionDuration: '0.8s'
        });

        $('.item-filter a').click(function()  {
            var filterValue = $(this).attr('data-filter');
            portfolioGroup.isotope({ filter: filterValue });
        });

        //Enable animation when scrolling pass the section
        $('.waypoint-animated-element').waypoint(function()  {
            var animationName = $(this.element).data('animation');
            $(this.element).addClass('visible');  
            $(this.element).addClass(animationName);

            //Number Animation
            if($(this.element).hasClass('animated-text')) {
            var funFact1 = $('#funFactVal1').text();
            
            $({numberValue: 0}).animate({numberValue: funFact1}, {
                duration: 2500,
                easing: 'linear',
                step: function() { 
                $('#funFact1').text(Math.ceil(this.numberValue)); 
                }
            });
                
            var funFact2 = $('#funFactVal2').text();
            $({numberValue: 0}).animate({numberValue: funFact2}, {
                duration: 2500,
                easing: 'linear',
                step: function() { 
                $('#funFact2').text(Math.ceil(this.numberValue)); 
                }
            });
                
            var funFact3 = $('#funFactVal3').text();
            $({numberValue: 0}).animate({numberValue: funFact3}, {
                duration: 2500,
                easing: 'linear',
                step: function() { 
                $('#funFact3').text(Math.ceil(this.numberValue)); 
                }
            });
                
            var funFact4 = $('#funFactVal4').text();
            $({numberValue: 0}).animate({numberValue: funFact4}, {
                duration: 2500,
                easing: 'linear',
                step: function() { 
                $('#funFact4').text(Math.ceil(this.numberValue)); 
                }
            });
            }
        }, {
            offset: '70%'
        });
        });

        var owl = $(".review-group");

        owl.owlCarousel({
        navigation : false,
        singleItem : true,
        autoPlay: 5000,
        });

        $('.hover-element').hover(
        function()  {  
            $(this).addClass('hover-effect');
        },
        function()  { 
            $(this).removeClass('hover-effect');
        }
        )
    });
</script> 
<script type="text/javascript">

        //Initialize Revolution Slider
        var tpj = jQuery;

        var slider;
        tpj(document).ready(function() {
        if (tpj("#rev_slider").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider");
        } else {
            slider = tpj("#rev_slider").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
                },
                arrows: {
                style: "zeus",
                enable: true,
                hide_onmobile: false,
                hide_onleave: false,
                tmp: '<div class="tp-title-wrap">   <div class="tp-arr-imgholder"><\/div> <\/div>',
                left: {
                    h_align: "left",
                    v_align: "center",
                    h_offset: 10,
                    v_offset: 0
                },
                right: {
                    h_align: "right",
                    v_align: "center",
                    h_offset: 10,
                    v_offset: 0
                }
                },
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1400, 1240, 778, 480],
            gridheight: [568, 768, 670, 580],
            lazyType: "none",
            parallax: {
                type:"scroll",
                origo:"enterpoint",
                speed:400,
                levels:[5,10,15,20,25,30,35,40,45,50],
            },
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
            });
        }
    
        var sliderLoaded = false;

        slider.bind("revolution.slide.onloaded",function (e) {
            sliderLoaded = true;

            if(!window.load)
            slider.revpause();
        });

        $(window).load(function(e) {
            window.load = true;
            
            if(sliderLoaded)
            slider.revresume();
        });
        }); /*ready*/
</script>