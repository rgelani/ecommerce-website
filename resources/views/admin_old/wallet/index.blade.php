@extends('admin.layouts.master')

@section('content')

    <!--strat dashbord product view -->
    <div class="main_content menu_div bg-white mt-5 position-relative">

        <!--===============================================================================
                                     start logistic payment
        =============================================================================== -->

        <div class="product_view">
            <div class="product_section_main p-5">
                <div class="row">
                    <div class="col-xl-3  col-md-6 col-sm-12">
                        <div class="item product_box d-flex justify-content-between p-4">
                            <div class="product_box_text">
                                <p>Total Wallet amount</p>
                                <h2>56</h2>
                                <p>Quality</p>
                            </div>
                            <div class="product_box_icon">
                                <img src="image/total+product.png" alt="total-produc">
                                <img src="image/product_arrow.png" alt="arrow" class="d-block pt-5 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-sm-12  mt-xl-0 ps-3">
                        <div class="item product_box_2 product_box d-flex justify-content-between p-4">
                            <div class="product_box_text">
                                <p>Used Wallet amount</p>
                                <h2>56</h2>
                                <p>Quality</p>
                            </div>
                            <div class="product_box_icon">
                                <img src="image/pandding_product.png" alt="total-produc">
                                <img src="image/product_arrow.png" alt="arrow" class="d-block pt-5 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3">
                        <div class="item product_box_3 product_box d-flex justify-content-between p-4">
                            <div class="product_box_text">
                                <p>avalible wallet amount</p>
                                <h2>56</h2>
                                <p>Quality</p>
                            </div>
                            <div class="product_box_icon">
                                <img src="image/pass+product.png" alt="total-produc">
                                <img src="image/product_arrow.png" alt="arrow" class="d-block pt-5 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-3">
                        <div class="item product_box_4 product_box d-flex justify-content-between p-4">
                            <div class="product_box_text">
                                <p>TOtal bonace wallet amount</p>
                                <h2>56</h2>
                                <p>Quality</p>
                            </div>
                            <div class="product_box_icon">
                                <img src="image/error_product.png" alt="total-produc">
                                <img src="image/product_arrow.png" alt="arrow" class="d-block pt-5 ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>

                <div class="d-flex  py-5 justify-content-end me-5 pe-5">
                    <div class="w-25 justify-content-start">
                        <div class="input-group">
                            <input type="text" class="form-control marketing_camping_search pl-0 border-left-0 "
                                placeholder="Seller_Id or Email or Mobile" aria-label="Seller_Id or Email or Mobile">
                        </div>
                    </div>
                </div>
                <p class="d-flex justify-content-end me-5 pe-5 fs-6"> Result Out of 500 to 56000</p>
            </div>

            <!--start product_aprove_main -->
            <div class="product_approval ">
                <div class="d-flex justify-content-center">
                    <div class="logistric_main wallet_main  p-0   d-inline">
                        <ul class="d-flex  approval_heading mb-0 p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no wallet_no_radius">Sr. No.</li>
                            <li class="d-inline seller_name_wallet">Seller_name</li>
                            <li class="d-inline shipment_date">Seller_id</li>
                            <li class="d-inline logistic_no_order">Wallet_id</li>
                            <li class="d-inline avalible_wallet_amount">Avalible wallet amount</li>
                            <li class="d-inline total_wallet_amount">total wallet amount</li>
                            <li class="d-inline used_wallet_amount">used wallet amount</li>
                            <li class="d-inline total_bounce_amount">total bonace amount</li>
                            <li class="d-inline used_bonace_amount">used bonace amount </li>
                            <li class="d-inline wallet_bounce_amount wallet_bounce_amount_radiuse">avalibale
                                bounce amount</li>
                        </ul>
                        <div class="scrollbar scroll_aproova wallet_main_table" id="style-2">
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>
                            <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                                <li class="d-inline logistic_sr_no">1</li>
                                <li class="d-inline seller_name_wallet">ABCD</li>
                                <li class="d-inline shipment_date">123456789</li>
                                <li class="d-inline logistic_no_order">23456789</li>
                                <li class="d-inline avalible_wallet_amount">₹550000</li>
                                <li class="d-inline total_wallet_amount">₹2500000</li>
                                <li class="d-inline used_wallet_amount">₹1950000</li>
                                <li class="d-inline total_bounce_amount">1000000</li>
                                <li class="d-inline used_bonace_amount">450000 </li>
                                <li class="d-inline wallet_bounce_amount  ">550000</li>
                            </ul>


                        </div>
                    </div>
                </div>

            </div>
            <!--start product_aprove_main -->

            <!-- strat pagination -->
            <div class="pagination_and_button d-flex justify-content-end mt-5 me-5 pe-4 align-items-center">
                <nav aria-label="Page navigation example w-50 mb-0 d-flex align-items-center">

                    <ul class="custom-pagination pagination-secondary pagination align-items-stretch">

                        <p class="mb-0 pb-0 total_camping_text me-5">Total Result</p>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Prev</span>
                            </a>
                        </li>
                        <li class="page-item"><span class="page-link">1</span></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- end right pagination -->

        </div>
    </div>
    </div>
    <!--===============================================================================
                                end logistic payment
        =============================================================================== -->


@endsection

