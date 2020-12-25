<!-- Bootstrap -->
   
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

<script src="/assets/backend/js/ckeditor/ckeditor.js"></script>

<!-- Datatable -->
<script src="/assets/backend/js/jquery.dataTables.min.js"></script>
<script src="/assets/backend/js/dataTables.bootstrap.min.js"></script>


<script>

    $(function()  {
        //Theme Setting, change color of charts
        $('.color-list > li > span').click(function() {
        mainColor = $(this).data('color');
        initChart();
        });

        var mainColor = '#5090F7';
        var secondaryColor = '#34495e';

        ////initialize all charts
        initChart();

        function initChart()  {        
        var data = [{ data: [[0, 5], [1, 8], [2, 5], [3, 8], [4, 7], [5,9], [6, 8], [7, 8], [8, 10], [9, 12], [10, 10], [11, 5], [12, 9]],
            label: "Mobile Application"
        },
            { data: [[0, 8], [1, 9], [2, 12], [3, 11], [4, 13], [5,9], [6, 10], [7, 9], [8, 9], [9, 8], [10, 10], [11, 12], [12, 13]],
            label: "Web Application"
        }],

        options = { 
            xaxis: {
            ticks: [[1, 'Jan'], [2, 'Feb'], [3, 'Mar'], [4, 'Apr'], [5, 'May'], [6, 'Jun'], [7, 'Jul'], [8, 'Aug'], [9, 'Sep'], [10, 'Oct'], [11, 'Nov'], [12, 'Dec']]
            },
            series: {
            lines: {
                show: true, 
            },
            points: {
                show: true,
                radius: '3.5'
            },
            shadowSize: 0
            },
            grid: {
            hoverable: true,
            clickable: true,
            color: '#bbb',
            borderWidth: 1,
            borderColor: '#eee'
            },
            colors: [mainColor,secondaryColor]
        },
        plot;

        //Area Chart
        var areaData = [{ 
            data: [[0, 5], [1, 8], [2, 5], [3, 8], [4, 7], [5,9], [6, 8]],
            label: "Follower"
            }
        ],

        areaOptions = { 
            xaxis: {
            ticks: [[1, 'Mon'], [2, 'Tue'], [3, 'Wed'], [4, 'Thr'], [5, 'Fri'], [6, 'Sat'], [7, 'Sun']]
            },
            series: {
            lines: { 
                show: true, 
                fill: true
            },
            shadowSize: 0
            },
            grid: {
            hoverable: true,
            clickable: true,
            color: '#bbb',
            borderWidth: 1,
            borderColor: '#eee'
            },
            colors: [mainColor]
        },
        areaPlot;

        plot = $.plot($('.line-placeholder'), data, options);
        areaPlot = $.plot($('.area-placeholder'), areaData, areaOptions);

        $("<div id='tooltip'><\/div>").css({
            position: "absolute",
            display: "none",
            border: "1px solid #95a4b8",
            padding: "4px",
            "font-size": "12px",
            color: "#fff",
            "border-radius": "4px",
            "background-color": "#95a4b8",
            opacity: 0.90
        }).appendTo("body");

        $(".chart-placeholder").bind("plothover", function (event, pos, item) {
            var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";
            $("#hoverdata").text(str);
        
            if (item) {
            var x = item.datapoint[0],
                y = item.datapoint[1];
            
                $("#tooltip").html(item.series.label+ " : " + y)
                .css({top: item.pageY+5, left: item.pageX+5})
                .fadeIn(200);
            } else {
            $("#tooltip").hide();
            }
        });

        //Sparkline
        $('.sparkbar').sparkline([15,19,20,22,33,27,31,27,19,30,21,10,15,18,25,9,11,14,16,10,15,16], {
            type: 'bar', 
            barColor: mainColor
        });
        $('.sparkline').sparkline([15,19,20,22,33,27,31,27,19,30,21,10,15,18,25,9,11,14,16,10,15,16,7,12,16,17,14,9,2,12,15,16,7,12,15,12,9,5,7,19,11,20,12,12], {
            type: 'line', 
            lineColor: mainColor,
            fillColor: false,
            maxSpotColor: false,
            minSpotColor: false,
            spotRadius: 0,
            highlightLineColor: secondaryColor
        });
        }

        //Redraw Charts
        $(window).resize(function() {
        initChart();
        });

        //Animated Weather Icons
        var iconLarge = new Skycons({"color": "white"});
        iconLarge.set("skycon1", "partly-cloudy-day");
        
        var iconsSmall = new Skycons({"color": "#7f888f"});
        iconsSmall.set("skycon2", "partly-cloudy-day");
        iconsSmall.set("skycon3", "sleet");
        iconsSmall.set("skycon4", "wind");
        iconsSmall.set("skycon5", "clear-day");
        
        iconLarge.play();
        iconsSmall.play();

        //Show event modal from clicking event on calendar
        $('tbody.event-calendar').on('click', '.event', function() {
        var monthEvent = $(this).attr('data-month');
        var dayEvent = $(this).text();
        var eventContent = $('.day-event[data-month="' + monthEvent + '"][data-day="' + dayEvent + '"]').children('.event-content').clone();

        var targetModal = $('#showEventModal');

        targetModal.find('.modal-body').append(eventContent);

        targetModal.modal('show');
        });

        $('#showEventModal').on('hidden.bs.modal', function (e) {  
        $(this).find('.modal-body').html('');
        });

        //Display notificaition
        $(window).load(function() {
        setTimeout(function() {
            noty({
                layout: 'topRight',
                text: '<strong>Mary Cormier<\/strong><br/>Hello, are you there?',
                theme: 'flat-noty noty-dark font-12',
                template: '<div class="noty_message has-image"><span class="noty_image"><img src="../img/profile5.jpg" class="profile-pic" alt=""><\/span><span class="noty_text"><\/span><div class="noty_close"><\/div><\/div>',
                type: '',
                timeout: '5000',
                animation: {
                open: 'animated flipInX',
                close: 'animated flipOutX',
                easing: 'swing', 
                speed: 500
                }
            });
        },2000);
        });        
    });
</script>