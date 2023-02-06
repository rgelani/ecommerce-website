<!DOCTYPE html>
<html>
<head>
    <title>Product View</title>

    <link type="image/x-icon" rel="shortcut icon" href="{{asset('seller-assets/images/favicon.png')}}" />

    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font-Awesome Fonts -->
    <link href="{{asset('seller-assets/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('seller-assets/css/bootstrap.min.css')}}">

    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/dashboard.css')}}">

    <!-- chart css -->
    <link rel="stylesheet" href="{{asset('seller-assets/css/chart.css')}}">

    <!-- chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

</head>
@yield('extra-css')
    <body class="product_view_page">
        <div class="main_wrapper dashboard_wrap">
        @include('seller.layouts.sidebar')
        <div class="cm-overlay"></div>
            <!-- Main Content Start -->
            <div class="main_content">
                <div class="main_content_lg">
                    @include('seller.layouts.header')
                    @yield('content')

                    </div>
                </div>
                <!-- Main Content End -->

                </div>
            </div>

            <script src="{{asset('seller-assets/js/jquery-3.5.1.min.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
            <script src="{{asset('seller-assets/js/custom.js')}}"></script>
            <script src="{{asset('seller-assets/js/chart.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
            <script src="https://codepen.io/MaciejCaputa/pen/EmMooZ.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
            <script src="https://code.highcharts.com/highcharts.js"></script>

            <script>
                $(document).ready(function () {
                    //Popover Js
                    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                        return new bootstrap.Popover(popoverTriggerEl)
                    })


                    function sliceSize(dataNum, dataTotal) {
                        return (dataNum / dataTotal) * 360;
                    }

                    function addSlice(id, sliceSize, pieElement, offset, sliceID, color) {
                        $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
                        var offset = offset - 1;
                        var sizeRotation = -179 + sliceSize;

                        $(id + " ." + sliceID).css({
                            "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
                        });

                        $(id + " ." + sliceID + " span").css({
                            "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
                            "background-color": color
                        });
                    }

                    function iterateSlices(id, sliceSize, pieElement, offset, dataCount, sliceCount, color) {
                        var
                            maxSize = 179,
                            sliceID = "s" + dataCount + "-" + sliceCount;

                        if (sliceSize <= maxSize) {
                            addSlice(id, sliceSize, pieElement, offset, sliceID, color);
                        } else {
                            addSlice(id, maxSize, pieElement, offset, sliceID, color);
                            iterateSlices(id, sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
                        }
                    }

                    function createPie(id) {
                        var
                            listData = [],
                            listTotal = 0,
                            offset = 0,
                            i = 0,
                            pieElement = id + " .pie-chart__pie"
                        dataElement = id + " .pie-chart__legend"

                        color = [
                            "cornflowerblue",
                            "olivedrab",
                            "orange",
                            "tomato",
                            "crimson",
                            "purple",
                            "turquoise",
                            "forestgreen",
                            "navy"
                        ];

                        color = shuffle(color);

                        $(dataElement + " span").each(function () {
                            listData.push(Number($(this).html()));
                        });

                        for (i = 0; i < listData.length; i++) {
                            listTotal += listData[i];
                        }

                        for (i = 0; i < listData.length; i++) {
                            var size = sliceSize(listData[i], listTotal);
                            iterateSlices(id, size, pieElement, offset, i, 0, color[i]);
                            $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
                            offset += size;
                        }
                    }

                    function shuffle(a) {
                        var j, x, i;
                        for (i = a.length; i; i--) {
                            j = Math.floor(Math.random() * i);
                            x = a[i - 1];
                            a[i - 1] = a[j];
                            a[j] = x;
                        }

                        return a;
                    }

                    function createPieCharts() {
                        createPie('.pieID--micro-skills');
                        createPie('.pieID--categories');
                        createPie('.pieID--operations');
                    }

                    createPieCharts();


                    // PHOTO CHART
                    var chart = new Highcharts.Chart({
                        chart: {
                            renderTo: 'photoUploadChart',
                            type: 'pie'
                        },
                        title: {
                            text: ''
                        },

                        credits: {
                            enabled: false
                        },
                        plotOptions: {
                            pie: {
                                dataLabels: {
                                    enabled: false
                                },
                                size: 205,
                                innerSize: '50%',
                                center: ['50%', '22%']
                            }
                        },
                        series: [{
                            data: [{
                                name: 'Returen order',
                                color: '#83DF7494',
                                y: 30
                            }, {
                                name: 'Panalty',
                                color: '#F1430C59',
                                y: 70
                            }]
                        }]
                    },
                        // using 

                        function (chart) { // on complete

                            var xpos = '100%';
                            var ypos = '100%';
                            var circleradius = 105;

                            // Render the circle
                            chart.renderer.circle(xpos, ypos, circleradius).attr({
                                fill: 'none',
                                size: 0,
                            }).add();

                        });

                    // Vendor CHART
                    $('#vendorChart').highcharts({
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: 0,
                            plotShadow: false
                        },
                        credits: {
                            enabled: false
                        },

                        title: {
                            text: '',
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        plotOptions: {
                            pie: {
                                dataLabels: {
                                    enabled: false
                                },
                                size: 200,
                                center: ['50%', '22%']
                            }
                        },
                        series: [{
                            type: 'pie',
                            innerSize: '60%',
                            data: [{
                                name: 'Completed',
                                color: '#FFCE5547',
                                y: 50
                            }, {
                                name: 'In Progress',
                                color: '#4D7C73A3',
                                y: 20
                            }, {
                                name: 'Returned',
                                color: '#FF00003B',
                                y: 30
                            }]
                        }]
                    });

                });

            </script>
            @yield('extra-script')
    </body>
</html>