@extends('seller.layouts.master')
@section('extra-css')
    <!-- || Notice || -->
    <!-- {this link use in cancle page because some class is use in cancle} -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/order.css') }}">

    <!-- || Notice || -->
    <!-- {this link use in cancle page because some class is use in cancle} -->
    <!-- cancle Sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/cancle.css') }}">
    <!-- wallet pie chart css -->
    <link rel="stylesheet" href="{{ asset('seller-assets/css/wallet_pie_chat.css') }}">
    <!-- wallet css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/wallet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/wallet_pie_chat.css') }}">
    <link href="{{ asset('seller-assets/css/sweetalert.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="cm-overlay"></div>
    <div class="main-dashboard">
        <div class="dashboard-congratulation-row">
            <div class="left-congratulation-col">
                <div class="left-congratulation-inner">
                    <p>Congratulations 🎉 John! You have won gold medal</p>
                    <div class="left-congratulation-image">
                        <img src="{{ asset('seller-assets/image/dashboard/congratulation-left.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="right-congratulation-col">
                <div class="right-congratulation-inner">
                    <div class="statistics-row">
                        <div class="statistics-left-col">
                            <h6>Statistics</h6>
                        </div>
                        <div class="statistics-right-col">
                            <h6>Updated 3 Day ago</h6>
                        </div>
                    </div>
                    <div class="sales-row">
                        <div class="sales-col">
                            <div class="sales-image-content">
                                <div class="sales-image" style="background-color: #D38DDE6E;">
                                    <img src="{{ asset('seller-assets/image/dashboard/salespic.png') }}" alt="">
                                </div>
                                <h6>Sales</h6>
                            </div>
                            <div class="sales-content-text">
                                <h3>5.4K</h3>
                            </div>
                        </div>
                        <div class="sales-col">
                            <div class="sales-image-content">
                                <div class="sales-image" style="background-color: #F1430C59;">
                                    <img src="{{ asset('seller-assets/image/dashboard/turnover.png') }}" alt="">
                                </div>
                                <h6>Sales</h6>
                            </div>
                            <div class="sales-content-text">
                                <h3>5.4K</h3>
                            </div>
                        </div>
                        <div class="sales-col">
                            <div class="sales-image-content">
                                <div class="sales-image" style="background-color: #1FF10C33;">
                                    <img src="{{ asset('seller-assets/image/dashboard/box.png') }}" alt="">
                                </div>
                                <h6>Sales</h6>
                            </div>
                            <div class="sales-content-text">
                                <h3>5.4K</h3>
                            </div>
                        </div>
                        <div class="sales-col">
                            <div class="sales-image-content">
                                <div class="sales-image" style="background-color: #AC8DDE73;">
                                    <img src="{{ asset('seller-assets/image/dashboard/shopping-cart 1.png') }}" alt="">
                                </div>
                                <h6>Sales</h6>
                            </div>
                            <div class="sales-content-text">
                                <h3>5.4K</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-orders-row">
            <div class="orders-left-col">
                <div class="left-inner-row">
                    <div class="left-inner-col">
                        <h6>New Orders</h6>
                        <div class="orders-left-image">
                            <img src="{{ asset('seller-assets/image/dashboard/box 2.png') }}" alt="">
                        </div>
                        <h5>276</h5>
                    </div>
                    <div class="left-inner-col">
                        <h6>New Orders</h6>
                        <div class="orders-left-image">
                            <img src="{{ asset('seller-assets/image/dashboard/profit 1.png') }}" alt="">
                        </div>
                        <h5>276</h5>
                    </div>
                </div>
                <div class="earnings-left-content">
                    <div class="earnings-left-text text-center">
                        <h3>Earnings</h3>
                        <div class="month-text">
                            <p>This Month</p>
                            <p>$4055.56</p>
                        </div>
                        <p>68.2% more earnings than last month.</p>
                    </div>
                    <div class="earnings-right-arte">
                        <div class="widget">
                            <div id="chart" class="chart-container"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="orders-right-col">
                <div class="orders-right-col-inner">
                    <div class="turnover-report-row ">
                        <div class="turnover-report-col-left">
                            <div>
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                        <div class="turnover-report-col-right">
                            <div class="turnover-report-select">
                                <select>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                </select>
                            </div>
                            <h2>590K</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-announcement-row">
            <div class="product-announcement-left-col">
                <table class="table cm_table cancle_table main-dashboard-list">
                    <thead>
                        <tr>
                            <th scope="col" style="padding:20px 140px 20px;" id="id01">Product</th>
                            <th scope="col">view</th>
                            <th scope="col">oder</th>
                            <th scope="col">R/O Order</th>
                            <th scope="col">REVENUE</th>
                            <th scope="col">SALES</th>
                        </tr>
                    </thead>
                    <tbody class="gfg cancle_scroll_bar">
                        <tr>
                            <td>
                                <div class="product_img_and_name">
                                    <div class="product_img" data-bs-toggle="modal"
                                        data-bs-target="#product_modal">
                                        <img src="{{ asset('seller-assets/image/product_view/product_1.png') }}" alt="product">
                                    </div>
                                    <span id="list">Apple Watch Series 5</span>
                                </div>
                            </td>
                            <td class="table_cm_text">
                                <span>23.4k</span>
                                <span>in 24 hours</span>
                            </td>
                            <td class="table_cm_text">14.8K</td>
                            <td class="table_cm_text">255</td>
                            <td class="table_cm_text">₹9,50,600</td>
                            <td class="table_cm_text">68%</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product_img_and_name">
                                    <div class="product_img" data-bs-toggle="modal"
                                        data-bs-target="#product_modal">
                                        <img src="{{ asset('seller-assets/image/product_view/product_1.png') }}" alt="product">
                                    </div>
                                    <span id="list">Apple Watch Series 5</span>
                                </div>
                            </td>
                            <td class="table_cm_text">
                                <span>23.4k</span>
                                <span>in 24 hours</span>
                            </td>
                            <td class="table_cm_text">14.8K</td>
                            <td class="table_cm_text">255</td>
                            <td class="table_cm_text">₹9,50,600</td>
                            <td class="table_cm_text">68%</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product_img_and_name">
                                    <div class="product_img" data-bs-toggle="modal"
                                        data-bs-target="#product_modal">
                                        <img src="{{ asset('seller-assets/image/product_view/product_1.png') }}" alt="product">
                                    </div>
                                    <span id="list">Apple Watch Series 5</span>
                                </div>
                            </td>
                            <td class="table_cm_text">
                                <span>23.4k</span>
                                <span>in 24 hours</span>
                            </td>
                            <td class="table_cm_text">14.8K</td>
                            <td class="table_cm_text">255</td>
                            <td class="table_cm_text">₹9,50,600</td>
                            <td class="table_cm_text">68%</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product_img_and_name">
                                    <div class="product_img" data-bs-toggle="modal"
                                        data-bs-target="#product_modal">
                                        <img src="{{ asset('seller-assets/image/product_view/product_1.png') }}" alt="product">
                                    </div>
                                    <span id="list">Apple Watch Series 5</span>
                                </div>
                            </td>
                            <td class="table_cm_text">
                                <span>23.4k</span>
                                <span>in 24 hours</span>
                            </td>
                            <td class="table_cm_text">14.8K</td>
                            <td class="table_cm_text">255</td>
                            <td class="table_cm_text">₹9,50,600</td>
                            <td class="table_cm_text">68%</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product_img_and_name">
                                    <div class="product_img" data-bs-toggle="modal"
                                        data-bs-target="#product_modal">
                                        <img src="{{ asset('seller-assets/image/product_view/product_1.png') }}" alt="product">
                                    </div>
                                    <span id="list">Apple Watch Series 5</span>
                                </div>
                            </td>
                            <td class="table_cm_text">
                                <span>23.4k</span>
                                <span>in 24 hours</span>
                            </td>
                            <td class="table_cm_text">14.8K</td>
                            <td class="table_cm_text">255</td>
                            <td class="table_cm_text">₹9,50,600</td>
                            <td class="table_cm_text">68%</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product_img_and_name">
                                    <div class="product_img" data-bs-toggle="modal"
                                        data-bs-target="#product_modal">
                                        <img src="{{ asset('seller-assets/image/product_view/product_1.png') }}" alt="product">
                                    </div>
                                    <span id="list">Apple Watch Series 5</span>
                                </div>
                            </td>
                            <td class="table_cm_text">
                                <span>23.4k</span>
                                <span>in 24 hours</span>
                            </td>
                            <td class="table_cm_text">14.8K</td>
                            <td class="table_cm_text">255</td>
                            <td class="table_cm_text">₹9,50,600</td>
                            <td class="table_cm_text">68%</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product_img_and_name">
                                    <div class="product_img" data-bs-toggle="modal"
                                        data-bs-target="#product_modal">
                                        <img src="{{ asset('seller-assets/image/product_view/product_1.png') }}" alt="product">
                                    </div>
                                    <span id="list">Apple Watch Series 5</span>
                                </div>
                            </td>
                            <td class="table_cm_text">
                                <span>23.4k</span>
                                <span>in 24 hours</span>
                            </td>
                            <td class="table_cm_text">14.8K</td>
                            <td class="table_cm_text">255</td>
                            <td class="table_cm_text">₹9,50,600</td>
                            <td class="table_cm_text">68%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="product-announcement-right-col">
                <div class="announcement-box">
                    <div class="announcement-title">
                        <h6>Announcement</h6>
                    </div>
                    <div class="announcement-message">
                        <h5>Message</h5>
                        <h5>Message</h5>
                        <h5>Message</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="returen-order-row">
            <div class="returen-order-left-col">
                <div class="returen-order-title">
                    <h5>Returen order/panalty</h5>
                </div>
                <div class="returen-order-chart">
                    <div class="chartWrap">
                        <div id="photoUploadChart"></div>
                    </div>
                </div>
                <div class="returen-order-color">
                    <ul>
                        <li>
                            <span class="color-code" style="background-color: #83DF7494;"></span>
                            <span class="color-name">Returen order</span>
                        </li>
                        <li>
                            <span class="color-code" style="background-color: #F1430C59;"></span>
                            <span class="color-name">Panalty</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="returen-order-mid-col">
                <div class="returen-order-title">
                    <h5>Goal Overview</h5>
                </div>
                <div class="returen-order-chart">
                    <div class="chartWrap">
                        <div id="vendorChart"></div>
                    </div>
                </div>
                <div class="returen-order-completed">
                    <ul>
                        <li>
                            <span class="completed">Completed</span>
                            <span class="completed-no">786,617</span>
                        </li>
                        <li>
                            <span class="completed">Completed</span>
                            <span class="completed-no">786,617</span>
                        </li>
                        <li>
                            <span class="completed">Completed</span>
                            <span class="completed-no">786,617</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="returen-order-right-col">
                <div class="reffrel_bonus_history">
                    <div class="">
                        <h2 class="reffrel_bonus_history_title text-black">Reffrel&nbsp;Bonus&nbsp;history
                        </h2>
                    </div>
                    <div>
                        <div
                            class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                            <div class="d-flex">
                                <div class="round_reffrel_bonus_history"
                                    style="background: linear-gradient(180deg, #00C6FF 0%, #0072FF 100%);">
                                    <img src="{{ asset('seller-assets/image/reffrel/Deposit_from_tstanding.png') }}" alt="">
                                </div>
                                <div class="deposit_reffrel_single_entry">
                                    <p>Deposit from Outstanding</p>
                                </div>
                            </div>
                            <div>
                                <span class="price_reffrel">- 1,470</span>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                            <div class="d-flex">
                                <div class="round_reffrel_bonus_history bg_deposit_ui"
                                    style="background: linear-gradient(180deg, #8500F9 0%, #E70EFF 100%);">
                                    <img src="{{ asset('seller-assets/image/reffrel/Deposit_UPI.png') }}" alt="">
                                </div>
                                <div class="deposit_reffrel_single_entry">
                                    <p>Deposit from Outstanding</p>
                                </div>
                            </div>
                            <div>
                                <span class="price_reffrel">- 1,470</span>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                            <div class="d-flex">
                                <div class="round_reffrel_bonus_history bg_deposit_ui"
                                    style="background: linear-gradient(180deg, #8500F9 0%, #E70EFF 100%);">
                                    <img src="{{ asset('seller-assets/image/reffrel/Deposit_from_Card.png') }}" alt="">
                                </div>
                                <div class="deposit_reffrel_single_entry">
                                    <p>Deposit from Outstanding</p>
                                </div>
                            </div>
                            <div>
                                <span class="price_reffrel">- 1,470</span>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                            <div class="d-flex">
                                <div class="round_reffrel_bonus_history cancelled_bg"
                                    style="background: linear-gradient(180deg, #A2CDC5 0%, #FC9F35 100%);">
                                    <img src="{{ asset('seller-assets/image/reffrel/Cancelled.png') }}" alt="">
                                </div>
                                <div class="deposit_reffrel_single_entry">
                                    <p>Deposit from Outstanding</p>
                                </div>
                            </div>
                            <div>
                                <span class="price_reffrel">- 1,470</span>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                            <div class="d-flex">
                                <div class="round_reffrel_bonus_history cancelled_bg"
                                    style="background: linear-gradient(180deg, #A2CDC5 0%, #FC9F35 100%);">
                                    <img src="{{ asset('seller-assets/image/reffrel/Use_For_Markentig.png') }}" alt="">
                                </div>
                                <div class="deposit_reffrel_single_entry">
                                    <p>Deposit from Outstanding</p>
                                </div>
                            </div>
                            <div>
                                <span class="price_reffrel">- 1,470</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-products-inner">
            <div class="top-products-title">
                <h2>Top Products</h2>
            </div>
            <div class="top-products-row">
                <div class="top-products-item">
                    <div class="top-products-inner-row">
                        <div class="top-products-left-col">
                            <div class="top-products-image">
                                <img src="{{ asset('seller-assets/image/dashboard/image-1.png') }}" alt="">
                            </div>
                            <div class="top-products-left-text">
                                <h4>Samsung S20 128 GB</h4>
                                <h6>Pink - 50 orders</h6>
                            </div>
                        </div>
                        <div class="top-products-right-col">
                            <div class="top-products-left-text">
                                <h4>Sale</h4>
                                <h6>$1,000.60</h6>
                            </div>
                            <div class="top-products-left-text">
                                <h4>Price</h4>
                                <h6>$1,300.92</h6>
                            </div>
                            <div class="top-products-left-text">
                                <h4>Today</h4>
                                <h6>$17,000.92s</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-products-item">
                    <div class="top-products-inner-row">
                        <div class="top-products-left-col">
                            <div class="top-products-image">
                                <img src="{{ asset('seller-assets/image/dashboard/image-2.png') }}" alt="">
                            </div>
                            <div class="top-products-left-text">
                                <h4>Samsung S20 128 GB</h4>
                                <h6>Pink - 50 orders</h6>
                            </div>
                        </div>
                        <div class="top-products-right-col">
                            <div class="top-products-left-text">
                                <h4>Sale</h4>
                                <h6>$1,000.60</h6>
                            </div>
                            <div class="top-products-left-text">
                                <h4>Price</h4>
                                <h6>$1,300.92</h6>
                            </div>
                            <div class="top-products-left-text">
                                <h4>Today</h4>
                                <h6>$17,000.92s</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top_product_dashboard_wrapper">
                <h2 class="top_product_title_dashboard">Top Products</h2>
                <table class="">
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div>
                                        <img src="{{ asset('seller-assets/image/dashboard/mobile_img_dashboard_top_product.png') }}" alt="">
                                    </div>
                                    <div class="top_product_title align-items-center">
                                        <p class="pb-0">Samsung S20 128 GB</p>
                                        <span>Pink - 50 orders</span>
                                    </div>
                                </div>
                            </td>
                            <!-- <td>

                        </td> -->
                            <td class="width_maintained"></td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Sale</div>
                                    <h5>$1,000.60</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Price</div>
                                    <h5>$1,300.92</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Today</div>
                                    <h5>$17,000.92</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div>
                                        <img src="{{ asset('seller-assets/image/dashboard/mobile_img_dashboard_top_product.png') }}" alt="">
                                    </div>
                                    <div class="top_product_title align-items-center">
                                        <p class="pb-0">Samsung S20 128 GB</p>
                                        <span>Pink - 50 orders</span>
                                    </div>
                                </div>
                            </td>
                            <!-- <td>

                        </td> -->
                            <td class="width_maintained"></td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Sale</div>
                                    <h5>$1,000.60</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Price</div>
                                    <h5>$1,300.92</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Today</div>
                                    <h5>$17,000.92</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div>
                                        <img src="{{ asset('seller-assets/image/dashboard/mobile_img_dashboard_top_product.png') }}" alt="">
                                    </div>
                                    <div class="top_product_title align-items-center">
                                        <p class="pb-0">Samsung S20 128 GB</p>
                                        <span>Pink - 50 orders</span>
                                    </div>
                                </div>
                            </td>
                            <!-- <td>

                        </td> -->
                            <td class="width_maintained"></td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Sale</div>
                                    <h5>$1,000.60</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Price</div>
                                    <h5>$1,300.92</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Today</div>
                                    <h5>$17,000.92</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div>
                                        <img src="{{ asset('seller-assets/image/dashboard/mobile_img_dashboard_top_product.png') }}" alt="">
                                    </div>
                                    <div class="top_product_title align-items-center">
                                        <p class="pb-0">Samsung S20 128 GB</p>
                                        <span>Pink - 50 orders</span>
                                    </div>
                                </div>
                            </td>
                            <!-- <td>

                        </td> -->
                            <td class="width_maintained"></td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Sale</div>
                                    <h5>$1,000.60</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Price</div>
                                    <h5>$1,300.92</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Today</div>
                                    <h5>$17,000.92</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div>
                                        <img src="{{ asset('seller-assets/image/dashboard/mobile_img_dashboard_top_product.png') }}" alt="">
                                    </div>
                                    <div class="top_product_title align-items-center">
                                        <p class="pb-0">Samsung S20 128 GB</p>
                                        <span>Pink - 50 orders</span>
                                    </div>
                                </div>
                            </td>
                            <!-- <td>

                        </td> -->
                            <td class="width_maintained"></td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Sale</div>
                                    <h5>$1,000.60</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Price</div>
                                    <h5>$1,300.92</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Today</div>
                                    <h5>$17,000.92</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div>
                                        <img src="{{ asset('seller-assets/image/dashboard/mobile_img_dashboard_top_product.png') }}" alt="">
                                    </div>
                                    <div class="top_product_title align-items-center">
                                        <p class="pb-0">Samsung S20 128 GB</p>
                                        <span>Pink - 50 orders</span>
                                    </div>
                                </div>
                            </td>
                            <!-- <td>

                        </td> -->
                            <td class="width_maintained"></td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Sale</div>
                                    <h5>$1,000.60</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Price</div>
                                    <h5>$1,300.92</h5>
                                </div>
                            </td>
                            <td>
                                <div class="top_product_title align-items-center">
                                    <div class="pb-0 sale_dashboard">Today</div>
                                    <h5>$17,000.92</h5>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
         <!-- Checkin Bestätigung Modal -->
         <div class="modal fade common_modal" id="product_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content terimin_content">
                        <div class="modal-body">
                            <div class="close_btn" data-bs-dismiss="modal">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </div>
                            <div class="common_product_content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="product_img_wrap">
                                            <img src="{{ asset('seller-assets/image/product_view/product_big_img.png') }}" alt="product">
                                        </div>
                                        <div class="product_small_img_wrap">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="product_small">
                                                        <img src="{{ asset('seller-assets/image/product_view/product_small_img_1.png') }}"
                                                            alt="small product">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product_small">
                                                        <img src="{{ asset('seller-assets/image/product_view/product_small_img_2.png') }}"
                                                            alt="small product">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product_small">
                                                        <img src="{{ asset('seller-assets/image/product_view/product_small_img_1.png') }}"
                                                            alt="small product">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product_small">
                                                        <img src="{{ asset('seller-assets/image/product_view/product_small_img_2.png') }}"
                                                            alt="small product">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product_small">
                                                        <img src="{{ asset('seller-assets/image/product_view/product_small_img_1.png') }}"
                                                            alt="small product">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product_small">
                                                        <img src="{{ asset('seller-assets/image/product_view/product_small_img_2.png') }}"
                                                            alt="small product">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product_small">
                                                        <img src="{{ asset('seller-assets/image/product_view/product_small_img_1.png') }}"
                                                            alt="small product">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product_small">
                                                        <img src="{{ asset('seller-assets/image/product_view/product_small_img_2.png') }}"
                                                            alt="small product">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="product_right_info">
                                            <h3>The Atelier Tailored Coat</h3>
                                            <div class="rate_wrap">
                                                <div class="start_wrap">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                </div>
                                                <span>4.5 / 1320 reviews</span>
                                            </div>
                                        </div>

                                        <div class="product_details">
                                            <div class="product_name">
                                                <p>Price:</p>
                                                <span>₹499.00</span>
                                            </div>
                                            <div class="product_name">
                                                <p>SKU Code :</p>
                                                <span>#4657</span>
                                            </div>
                                            <div class="product_name">
                                                <p>Tags :</p>
                                                <span>Fashion, Hood, Classic</span>
                                            </div>
                                            <div class="product_name">
                                                <p>Available Stock :</p>
                                                <span>500</span>
                                            </div>
                                        </div>

                                        <div class="product_dec">
                                            <p>Sleek, polished, and boasting an impeccably modern fit, this blue, 2-but-
                                                ton Lazio suit features a notch lapel, flap pockets, and accompanying
                                                flat
                                                front trousers—all in pure wool by Vitale Barberis Canonico.

                                                • Dark blue suit for a tone-on-tone look
                                                • Regular fit
                                                • 100% Cotton
                                                • Free shipping with 4 days delivery
                                            </p>
                                        </div>

                                        <div class="color_varient">
                                            <h3>Varient:</h3>
                                            <div class="var_wrap">
                                                <div class="color_wrap">
                                                    <p>Color</p>
                                                    <ul>
                                                        <li class="bg_black"></li>
                                                        <li class="bg_yellow"></li>
                                                        <li class="bg_orange"></li>
                                                        <li class="bg_green"></li>
                                                    </ul>
                                                </div>
                                                <div class="size_wrap">
                                                    <p>Size</p>
                                                    <ul>
                                                        <li class="size_fild">S</li>
                                                        <li class="size_fild">M</li>
                                                        <li class="size_fild">L</li>
                                                        <li class="size_fild">XL</li>
                                                        <li class="size_fild">XXL</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="size">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product_bottom_shape">
                            <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                                    fill="url(#paint0_radial_700_3904)" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                                    fill="url(#paint1_linear_700_3904)" fill-opacity="0.47" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" />
                                <defs>
                                    <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                                        <stop stop-color="#A2CDC5" />
                                        <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                                    </radialGradient>
                                    <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734"
                                        y2="-4.51455" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A2CDC5" />
                                        <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!--Start profile Model -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <div class="close_profile_img">
                                <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="profile_model_info">
                                <div>
                                    <div class="profile_img_round_main">
                                        <img src="{{ asset('seller-assets/image/image_bluk/profile_pic_model.png') }}"
                                            class="profile_img_round" alt="">
                                    </div>
                                    <div class="text-center my-3">
                                        <h4 class="text-dark">DoNotDisturb</h4>
                                        <p class="text-dark py-2">Lorem ipsum dolor sit amet.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body modal-body-cancel text-center">
                            <a class="logout" href="#">Logout</a>
                        </div>

                    </div>
                </div>
            </div>
            <!--End profile Model -->
    </div>



                  @endsection

@section('extra-script')
    <script type="text/javascript" src="{{ asset('seller-assets/js/sweetalert.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('seller-assets/js/order.js') }}"></script>

    <!-- pie_chart js-->
    <script type="text/javascript" src="{{ asset('seller-assets/js/wallet_pie_chart.js') }}"></script>
    <!-- pie_chart  js-->
    <script src="{{ asset('seller-assets/js/pie_chart_wallet_listtopie.min.js') }}"></script>

    <!-- model js -->
    <script>
        $(document).ready(function() {
            //Popover Js
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        });
    </script>
    <!--End model js -->

    <!--start pie chart  -->
    <script>
        $('#static').listtopie({
            startAngle: 0,
            strokeWidth: 0,
            hoverEvent: false,
            drawType: 'round',
            speedDraw: 150,
            hoverColor: '#ffffff',
            textColor: '#000',
            strokeColor: '#ffffff',
            textSize: '18',
            hoverAnimate: true,
            marginCenter: 1,
            sectorRotate: true,
            easingType: mina.bounce,
            infoText: true,
        });
        $('.donut').listtopie({
            startAngle: 270,
            strokeWidth: 2,
            hoverEvent: true,
            hoverBorderColor: '#2a363b',
            drawType: 'round',
            speedDraw: 150,
            hoverColor: '#ffffff',
            textColor: '#000',
            strokeColor: '#ffffff',
            textSize: '14',
            hoverAnimate: true,
            marginCenter: 50,
        });
    </script>
    <!--End pie chart  -->

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('.razor-pay-btn').on('click', function(e) {
            var totalAmount = $('#amount').val();
            if (totalAmount.length === 0) {
                totalAmount = 50;
            }
            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": (totalAmount * 100), // 2000 paise = INR 20
                "name": "I KART ONLINE SELLING PLATFORM",
                "description": "Razorpay",
                "image": "{{ asset('seller-dashborad_logo.png') }}",
                "handler": function(response) {
                    $.ajax({
                        url: '{{ route('seller.razorpay-payment') }}',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            description: $('#description').val(),
                            razorpay_payment_id: response.razorpay_payment_id,
                            totalAmount: totalAmount,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function() {
                            swal("Deposited!", 'Amount ₹' + totalAmount +
                                ' deposit successfully', "success");
                            setInterval(function() {
                                location.reload();
                            }, 2000); //run this thang every 2 seconds
                        },
                        error: function() {
                            swal("Failed!", 'Amount ₹' + totalAmount + ' failed to deposit',
                                "error");
                        }
                    });
                },
                "notes": {
                    "address": "Razorpay Corporate Office"
                },
                "theme": {
                    "color": "#528FF0"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        });

        $(document).on('click', '#add-campaign-amount', function() {
            console.log('clicked');
            var amount = $('#outstanding_amount').val();
            $.ajax({
                url: "{{ route('seller.add-campaign-amount') }}",
                type: 'POST',
                dataType: 'json',
                data: {
                    amount: amount,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('.text-danger').each(function() {
                        $(this).remove();
                    })
                    if (data['error']) {
                            $(`<p class='text-danger'>` + data['error']['amount'] + `</p>`)
                                .insertAfter(`#outstanding_amount`);
                    }
                    swal("Deposited!", 'Amount ₹' + amount + ' deposit successfully', "success");
                    setInterval(function() {
                        // location.reload();
                    }, 2000); //run this thang every 2 seconds
                },
                error: function() {
                    swal("Failed!", 'Amount ₹' + amount + ' failed to deposit', "error");
                }
            });
        })
    </script>
@endsection


{{-- RAZORPAY_KEY=rzp_test_t3wXnD6NSeXKPq --}}
{{-- RAZORPAY_SECRET=G7jSQg2YHR7ozx1LQyGHjNiR --}}
