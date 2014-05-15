<!-- Javascript files -->
<!-- jQuery -->
<script src="{{ URL::asset('theme/fillmanosity/js/jquery.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ URL::asset('theme/fillmanosity/js/bootstrap.min.js') }}"></script>
<!--  jQuery Spark line  JS -->
<script src="{{ URL::asset('theme/fillmanosity/js/jquery.sparkline.min.js') }}"></script>
<!-- jQuery flot -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ URL::asset('theme/fillmanosity/js/excanvas.min.js') }}"></script><![endif]-->
<script src="{{ URL::asset('theme/fillmanosity/js/jquery.flot.min.js') }}"></script>
<script src="{{ URL::asset('theme/fillmanosity/js/jquery.flot.resize.min.js') }}"></script>
<!-- Pretty Photo, Filter And Isotope JS -->
<script type="text/javascript" src="{{ URL::asset('theme/fillmanosity/js/filter.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('theme/fillmanosity/js/isotope.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('theme/fillmanosity/js/jquery.prettyPhoto.js') }}"></script>
<!-- Revolution Slider JS -->
<script src="{{ URL::asset('theme/fillmanosity/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ URL::asset('theme/fillmanosity/js/jquery.themepunch.plugins.min.js') }}"></script>
<!-- Respond JS for IE8 -->
<script src="{{ URL::asset('theme/fillmanosity/js/respond.min.js') }}"></script>
<!-- HTML5 Support for IE -->
<script src="{{ URL::asset('theme/fillmanosity/js/html5shiv.js') }}"></script>
<!-- Custom JS -->
<script src="{{ URL::asset('theme/fillmanosity/js/custom.js') }}"></script>
<!-- Javascript for this page -->
<!-- Js for plot -->
<script type="text/javascript">
    /* plot js */

    $(function() {
        var d1 = [[0, 1], [1, 2], [2, 3], [3, 4],[4, 5], [5, 6], [6, 5], [7, 6],[8, 7], [9, 6], [10, 7], [11, 8],[12, 9], [13, 9], [14, 9], [15, 8],[16, 8], [17, 9], [18, 10], [19, 10],[20, 9], [21, 8], [22, 7], [23, 8],[24, 9], [25, 8], [26, 6], [27, 4],[28, 2]];
        var options = {
            series: {
                lines: {
                    show: true, fill: true, fillColor: "rgba(113,214,232,0.5)", lineWidth:1
                },
                points: {
                    show: true, fill: true, fillColor: "rgba(113,214,232,0.5)"
                }
            },
            colors :["rgba(255,255,255,1)"],
            grid: {
                color: "#fff", borderWidth: 0, minBorderMargin: 5
            },
            xaxis: {
                font: {
                    size: 10,
                    color: "rgba(255,255,255,0.8)"
                }
            },
            yaxis: {
                font: {
                    size: 10,
                    color: "rgba(255,255,255,0.8)"
                }
            }
        };

        $.plot(".plot-chart", [ d1 ], options);
    });

    /* Spark Line bar js */


    $(".sparkline").sparkline( [20,23,19,20,19,17,16,20,18,17,19,23,19,22] , {
        type: 'bar',
        height: '35',
        barColor: 'rgba(255, 255, 255, 1)'
    });

    $(".list-bar").sparkline( 'html' , {
        type: 'bar',
        height: '16',
        barColor: 'white'
    });

</script>