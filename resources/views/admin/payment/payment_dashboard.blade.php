@extends('admin.layouts.master')

@section('content')
<!--===============================================================================
                                   start logistic payment
    =============================================================================== -->
<div class="product_view">
    <!-- Pandding Payment -->
    <div class="product_section_main p-5">
        <div class="row">
            <div class="col-xl-3  col-md-6 col-sm-12">
                <div class="item product_box payment_product_box d-flex justify-content-between p-4">
                    <div class="product_box_text">
                        <p>Today’s pandding payment </p>
                        <h2>1600</h2>
                        <p></p>
                    </div>
                    <div class="product_box_icon">
                        <img src="{{asset('admin/image/total_product.png')}}" alt="total-produc">

                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-md-6 col-sm-12  mt-xl-0 ps-3">
                <div class="item product_box_2 product_box d-flex justify-content-between p-4">
                    <div class="product_box_text">
                        <p>Total pandding payment </p>
                        <h2>4000</h2>
                        <p></p>
                    </div>
                    <div class="product_box_icon">
                        <img src="{{asset('admin/image/pandding_product.png')}}" alt="total-produc">
                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3">
                <div class="item product_box_3 product_box d-flex justify-content-between p-4">
                    <div class="product_box_text">
                        <p>completed payment </p>
                        <h2>12000</h2>
                        <p></p>
                    </div>
                    <div class="product_box_icon">
                        <img src="{{asset('admin/image/pass_product.png')}}" alt="total-produc">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex align-items-start justify-content-between">
        <div class="chart_left_side_main mt-5 payment_pai_chart  align-items-center w-50">
            <div id="container">
                <div>
                    <div class="anychart-credits"><span class="anychart-credits-text">AnyChart Trial
                            Version</span></a></div>
                </div>
            </div>

            <div class="left_seide_content_detail">
                <div class="left_top_detail_main d-flex">
                    <ul class="chart_single_detail_main text-center align-items-baseline me-4 pe-2">
                        <li class="chart_dote payment_chart_box me-2 "></li>
                        <li class="payment_dote">Avalible bank balance</li>
                        <li> 55000</li>
                    </ul>
                    <ul class="chart_single_detail_main text-center align-items-baseline ">
                        <li class="chart_dote payment_chart_box-1 dote_2 me-2"></li>
                        <li class="payment_dote-1">Total pandding payment<br></li>
                        <li>10000</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-50 ">
            <div>
                <ul class="mt-4 pt-4 reffrel_users_table">
                    <li class="d-flex justify-content-between align-items-center">
                        <p class="pb-0 mb-0 top_reffrel_title ms-2">Top Reffrel users</p>
                        <p class="pb-0 mb-0  reffrel_point_title">Refrell points</p>
                        <p></p>
                    </li>
                    <li class="d-flex justify-content-between align-items-bottum py-2 mt-2">
                        <div class="d-flex align-items-end ">
                            <img src="{{asset('admin-assets/image/Reffrel-users.png')}}" alt="">
                            <div class="mb-3 ms-4">
                                <p class="pb-0 mb-0 reffrel_user_name">GFSWHD WURHR</p>
                                <p class="mb-0 pb-0">25 April at 09:30 am</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <i class="">12345678</i>
                        </div>
                        <div class="payment_pay_buttom">
                            <a href="#">pay <img src="{{asset('admin-assets/image/category_arrow.png')}}" alt="" class="ms-2"></a>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between align-items-bottum py-2">
                        <div class="d-flex align-items-end ">

                            <img src="{{asset('admin-assets/image/Reffrel-users.png')}}" alt="">
                            <div class="mb-3 ms-4">
                                <p class="pb-0 mb-0 reffrel_user_name">GFSWHD WURHR</p>
                                <p class="mb-0 pb-0">25 April at 09:30 am</p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <i class="">12345678</i>
                        </div>
                        <div class="payment_pay_buttom">
                            <a href="#">pay <img src="{{asset('admin-assets/image/category_arrow.png')}}" alt="" class="ms-2"></a>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between align-items-bottum py-2">
                        <div class="d-flex align-items-end ">

                            <img src="{{asset('admin-assets/image/Reffrel-users.png')}}" alt="">
                            <div class="mb-3 ms-4">
                                <p class="pb-0 mb-0 reffrel_user_name">GFSWHD WURHR</p>
                                <p class="mb-0 pb-0">25 April at 09:30 am</p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <i class="">12345678</i>
                        </div>
                        <div class="payment_pay_buttom">
                            <a href="#">pay <img src="{{asset('admin-assets/image/category_arrow.png')}}" alt="" class="ms-2"></a>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between align-items-bottum py-2">
                        <div class="d-flex align-items-end ">

                            <img src="{{asset('admin-assets/image/Reffrel-users.png')}}" alt="">
                            <div class="mb-3 ms-4">
                                <p class="pb-0 mb-0 reffrel_user_name">GFSWHD WURHR</p>
                                <p class="mb-0 pb-0">25 April at 09:30 am</p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <i class="">12345678</i>
                        </div>
                        <div class="payment_pay_buttom">
                            <a href="#">pay <img src="{{asset('admin-assets/image/category_arrow.png')}}" alt="" class="ms-2"></a>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between align-items-bottum py-2">
                        <div class="d-flex align-items-end ">

                            <img src="{{asset('admin-assets/image/Reffrel-users.png')}}" alt="">
                            <div class="mb-3 ms-4">
                                <p class="pb-0 mb-0 reffrel_user_name">GFSWHD WURHR</p>
                                <p class="mb-0 pb-0">25 April at 09:30 am</p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <i class="">12345678</i>
                        </div>
                        <div class="payment_pay_buttom">
                            <a href="#">pay <img src="{{asset('admin-assets/image/category_arrow.png')}}" alt="" class="ms-2"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--===============================================================================
                              end logistic payment
    =============================================================================== -->


@endsection
@section('extra-js')
<script>
    // doughnut  chart
    anychart.onDocumentReady(function() {

        // add data
        var data = anychart.data.set([
            [34],
            [21],
            [15],
            [11],

        ]);

        // create a pie chart with the data
        var chart = anychart.pie(data);

        // set the chart radius making a donut chart
        chart.innerRadius('55%')

        // create a color palette
        var palette = anychart.palettes.distinctColors();

        // set the colors according to the brands
        palette.items([{
                color: '#1dd05d'
            },
            {
                color: '#000000'
            },
            {
                color: '#00a3da'
            },
            {
                color: '#156ef2'
            },

        ]);

        // apply the donut chart color palette
        chart.palette(palette);

        // set the position of labels
        chart.labels().format('{%x} — {%y}%').fontSize(16);

        // disable the legend
        chart.legend(false);

        // format the donut chart tooltip
        chart.tooltip().format('Market share: {%PercentValue}%');

        // create a standalone label
        var label = anychart.standalones.label();

        // configure the label settings

        // set the label as the center content
        chart.center().content(label);

        // set container id for the chart
        chart.container('container');

        // initiate chart drawing
        chart.draw();



    });
</script>
@endsection