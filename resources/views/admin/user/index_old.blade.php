@extends('admin.layouts.master')

@section('extra-css')
    <link rel="stylesheet" src="{{ asset('admin-assets/css/jsvectormap.min.css') }}">
    <link src="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link src="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link src="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

@endsection
@section('content')
    <!--strat dashbord product view -->
    <div class="main_content menu_div position-relative mt-5">

        <!-- strat product section-1 -->
        <div class="product_section_main p-5">

            <div class="row py-3">
                <div class="col-xl-3  col-md-6 col-sm-12">
                    <div class="item product_box d-flex justify-content-between p-4">
                        <div class="product_box_text">
                            <p>Totel Product</p>
                            <h2>5645345</h2>

                        </div>

                    </div>
                </div>
                <div class="col-xl-3  col-md-6 col-sm-12  mt-xl-0 ps-3">
                    <div class="item product_box_2 product_box d-flex justify-content-between p-4">
                        <div class="product_box_text">
                            <p>New Users</p>
                            <h2>56435345</h2>

                        </div>

                    </div>
                </div>
                <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3">
                    <div class="item product_box_3 product_box d-flex justify-content-between p-4">
                        <div class="product_box_text">
                            <p>This Week Registerd users</p>
                            <h2>5645345</h2>

                        </div>

                    </div>
                </div>
                <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3 ps-md-3">
                    <div class="item product_box_4 product_box d-flex justify-content-between p-4">
                        <div class="product_box_text">
                            <p>Total Users</p>
                            <h2>563435</h2>

                        </div>

                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate product_box">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Earnings</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <h5 class="text-success fs-14 mb-0">
                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k </h4>
                                    <a href="" class="text-decoration-underline">View net earnings</a>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-info rounded fs-3 px-2">
                                        <box-icon name='dollar-circle' class="text-success mb-0"></box-icon>

                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div> --}}

            <div class="row mt-lg-5 g-3">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                            <div>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    ALL
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    1M
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    6M
                                </button>
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    1Y
                                </button>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-header p-0 border-0 bg-soft-light">
                            <div class="row g-0 text-center">
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                        <p class="text-muted mb-0">Orders</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                        <p class="text-muted mb-0">Earnings</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                        <p class="text-muted mb-0">Refunds</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                        <h5 class="mb-1 text-success"><span class="counter-value"
                                                data-target="18.92">0</span>%</h5>
                                        <p class="text-muted mb-0">Conversation Ratio</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body p-0 pb-2">
                            <div class="w-100">
                                <div id="customer_impression_charts" data-colors='["#405189", "#0ab39c", "#f06548"]'
                                    class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->

                </div>
                <div class="col-lg-4">
                    <div class="card h-100">

                        <div class="card-body">

                            <div id="sales-by-locations" data-colors='["#f3f6f9", "#0ab39c", "#405189"]'
                                style="height: 269px" dir="ltr"></div>

                            <div class="px-2 py-2 mt-1">
                                <p class="mb-1">Canada <span class="float-end">75%</span></p>
                                <div class="progress mt-2" style="height: 6px;">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                    </div>
                                </div>

                                <p class="mt-3 mb-1">Greenland <span class="float-end">47%</span>
                                </p>
                                <div class="progress mt-2" style="height: 6px;">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                        style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="47">
                                    </div>
                                </div>

                                <p class="mt-3 mb-1">Russia <span class="float-end">82%</span></p>
                                <div class="progress mt-2" style="height: 6px;">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                        style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Datatables</h5>
                        </div>
                        <div class="card-body">
                            <table id="example"
                                class="table table-bordered table-responsive dt-responsive nowrap table-striped align-middle"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 10px;">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </th>
                                        <th data-ordering="false">User Id</th>
                                        <th data-ordering="false">User Name</th>
                                        <th data-ordering="false">Mobile</th>
                                        <th data-ordering="false">Email</th>
                                        <th data-ordering="false">Country</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>VLZ-452</td>
                                        <td>Ickart Customer</td>
                                        <td><a href="#!">8585885858</a></td>
                                        <td>Ickartcustomer@gmail.com</td>
                                        <td>India</td>
                                        <td>Surat</td>
                                        <td><button class="btn btn-primary">Action</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product section-1 -->

    </div>
@endsection

@section('content')
@endsection
{{-- @section('extra-js') --}}
@section('extra-js')
    <script src="{{ asset('admin-assets/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/apexcharts.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        document.addEventListener('DOMContentLoaded', function() {
            var table = new DataTable('#example');
        });
        document.addEventListener('DOMContentLoaded', function() {
            var table = new DataTable('#scroll-vertical', {
                "scrollY": "210px",
                "scrollCollapse": true,
                "paging": false,
                responsive: true
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            var table = new DataTable('#scroll-horizontal', {
                "scrollX": true
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            var table = new DataTable('#alternative-pagination', {
                "pagingType": "full_numbers"
            });
        });



        // get colors array from the string
        function getChartColorsArray(chartId) {
            if (document.getElementById(chartId) !== null) {
                var colors = document.getElementById(chartId).getAttribute("data-colors");

                if (colors) {
                    colors = JSON.parse(colors);
                    return colors.map(function(value) {
                        var newValue = value.replace(" ", "");

                        if (newValue.indexOf(",") === -1) {
                            var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                            if (color) return color;
                            else return newValue;
                        } else {
                            var val = value.split(",");

                            if (val.length == 2) {
                                var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                                rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                                return rgbaColor;
                            } else {
                                return newValue;
                            }
                        }
                    });
                } else {
                    console.warn('data-colors atributes not found on', chartId);
                }
            }
        }


        var linechartcustomerColors = getChartColorsArray("customer_impression_charts");

        if (linechartcustomerColors) {
            var options = {
                series: [{
                    name: "Orders",
                    type: "area",
                    data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67]
                }, {
                    name: "Earnings",
                    type: "bar",
                    data: [89.25, 98.58, 68.74, 108.87, 77.54, 84.03, 51.24, 28.57, 92.57, 42.36, 88.51, 36.57]
                }, {
                    name: "Refunds",
                    type: "line",
                    data: [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35]
                }],
                chart: {
                    height: 370,
                    type: "line",
                    toolbar: {
                        show: false
                    }
                },
                stroke: {
                    curve: "straight",
                    dashArray: [0, 0, 8],
                    width: [2, 0, 2.2]
                },
                fill: {
                    opacity: [0.1, 0.9, 1]
                },
                markers: {
                    size: [0, 0, 0],
                    strokeWidth: 2,
                    hover: {
                        size: 4
                    }
                },
                xaxis: {
                    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    axisTicks: {
                        show: false
                    },
                    axisBorder: {
                        show: false
                    }
                },
                grid: {
                    show: true,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                    padding: {
                        top: 0,
                        right: -2,
                        bottom: 15,
                        left: 10
                    }
                },
                legend: {
                    show: true,
                    horizontalAlign: "center",
                    offsetX: 0,
                    offsetY: -5,
                    markers: {
                        width: 9,
                        height: 9,
                        radius: 6
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 0
                    }
                },
                plotOptions: {
                    bar: {
                        columnWidth: "30%",
                        barHeight: "70%"
                    }
                },
                colors: linechartcustomerColors,
                tooltip: {
                    shared: true,
                    y: [{
                        formatter: function formatter(y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0);
                            }

                            return y;
                        }
                    }, {
                        formatter: function formatter(y) {
                            if (typeof y !== "undefined") {
                                return "$" + y.toFixed(2) + "k";
                            }

                            return y;
                        }
                    }, {
                        formatter: function formatter(y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " Sales";
                            }

                            return y;
                        }
                    }]
                }
            };
            var chart = new ApexCharts(document.querySelector("#customer_impression_charts"), options);
            chart.render();
        }

        var vectorMapWorldMarkersColors = getChartColorsArray("sales-by-locations");

        if (vectorMapWorldMarkersColors) {
            var worldemapmarkers = new jsVectorMap({
                map: "world_merc",
                selector: "#sales-by-locations",
                zoomOnScroll: false,
                zoomButtons: false,
                selectedMarkers: [0, 5],
                regionStyle: {
                    initial: {
                        stroke: "#9599ad",
                        strokeWidth: 0.25,
                        fill: vectorMapWorldMarkersColors[0],
                        fillOpacity: 1
                    }
                },
                markersSelectable: true,
                markers: [{
                    name: "Palestine",
                    coords: [31.9474, 35.2272]
                }, {
                    name: "Russia",
                    coords: [61.524, 105.3188]
                }, {
                    name: "Canada",
                    coords: [56.1304, -106.3468]
                }, {
                    name: "Greenland",
                    coords: [71.7069, -42.6043]
                }],
                markerStyle: {
                    initial: {
                        fill: vectorMapWorldMarkersColors[1]
                    },
                    selected: {
                        fill: vectorMapWorldMarkersColors[2]
                    }
                },
                labels: {
                    markers: {
                        render: function render(marker) {
                            return marker.name;
                        }
                    }
                }
            });
        } // Vertical Swiper
    </script>
@endsection
