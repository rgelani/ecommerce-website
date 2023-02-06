@extends('admin.layouts.master')

@section('content')
<!--strat map -->
<!-- strat product section-1 -->
<div class="product_section_main p-5">
    <div class="row">
        <div class="col-xl-3  col-md-6 col-sm-12">
            <div class="item product_box d-flex justify-content-between p-4">
                <div class="product_box_text">
                    <p>Totel Product</p>
                    <h2>56</h2>
                    <p>Quality</p>
                </div>
                <div class="product_box_icon">
                    <img src="{{asset('admin/image/total_product.png')}}" alt="total-produc">
                    <img src="{{asset('admin/image/product_arrow.png')}}" alt="arrow" class="d-block pt-5 ">
                </div>
            </div>
        </div>
        <div class="col-xl-3  col-md-6 col-sm-12  mt-xl-0 ps-3">
            <div class="item product_box_2 product_box d-flex justify-content-between p-4">
                <div class="product_box_text">
                    <p>Totel Product</p>
                    <h2>56</h2>
                    <p>Quality</p>
                </div>
                <div class="product_box_icon">
                    <img src="{{asset('admin/image/pandding_product.png')}}" alt="total-produc">
                    <img src="{{asset('admin/image/product_arrow.png')}}" alt="arrow" class="d-block pt-5 ">
                </div>
            </div>
        </div>
        <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3">
            <div class="item product_box_3 product_box d-flex justify-content-between p-4">
                <div class="product_box_text">
                    <p>Totel Product</p>
                    <h2>56</h2>
                    <p>Quality</p>
                </div>
                <div class="product_box_icon">
                    <img src="{{asset('admin/image/pass_product.png')}}" alt="total-produc">
                    <img src="{{asset('admin/image/product_arrow.png')}}" alt="arrow" class="d-block pt-5 ">
                </div>
            </div>
        </div>
        <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-3">
            <div class="item product_box_4 product_box d-flex justify-content-between p-4">
                <div class="product_box_text">
                    <p>Totel Product</p>
                    <h2>56</h2>
                    <p>Quality</p>
                </div>
                <div class="product_box_icon">
                    <img src="{{asset('admin/image/error_product.png')}}" alt="total-produc">
                    <img src="{{asset('admin/image/product_arrow.png')}}" alt="arrow" class="d-block pt-5 ">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product section-1 -->

<!-- start chart -->
<div id="chart-container" class="chart m-5 "> </div>
<div class="chart_text chart_text_2 position-absolute">Product's summary</div>
<div class="date_and_month_main">
    <input type="date" class="date_main date_main_2">
    <select class="chart_text_right position-absolute chart_text_right_2">
        <option value="month">Month</option>
        <option value="January ">January</option>
        <option value="February ">February</option>
        <option value="March ">March</option>
        <option value="April ">April</option>
        <option value="May  ">May</option>
        <option value="June">June</option>
        <option value="July ">July</option>
        <option value="August ">August</option>
        <option value="September ">September</option>
        <option value="October ">October</option>
        <option value="November ">November</option>
        <option value="December ">December</option>
    </select>
</div>
<!-- end chart -->



<!--Start Total marketing ammount  -->

<!--start search boxend prduct count -->
<div class="m-5 search_box_2  d-flex align-items-center justify-content-between position-relative mb-0 pb-0">

    <input class="search_email_mobile" placeholder="search_email_mobile">
    <span class="ModalCarrot logistic_search_icon"> </span>
    <p class="mb-0 me-3 ">Result Out of 500 to 56000</p>
</div>

<!--start search boxend prduct count -->
<div class="total_marketing_table_main m-5 mt-0">
    <div class="">
        <ul class="m-0 p-0 d-flex header_marketing">
            <li class="d-inline marketing_info_sr_no">Sr. No.</li>
            <li class="d-inline marketing_info_saller_name">Seller_name</li>
            <li class="d-inline marketing_info_total">Total Marketing Amount</li>
            <li class="d-inline marketing_info_mark_cate"> Marketing Category</li>
            <li class="d-inline marketing_info_click">Click</li>
            <li class="d-inline marketing_info_view">View</li>
            <li class="d-inline marketing_info_click">State</li>
            <li class="d-inline marketing_info_click">Date</li>
        </ul>
        <div class="scrollbar marketing_box" id="style-3">

            <div class="scroll_marketing">
                <ul class="m-0 p-0 d-flex mt-1">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click">Gujrat</li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="mx-3 d-flex ">
    <div class="chart_left_side_main d-flex align-items-center">
        <div id="container"></div>
        <ul class="chart_middel_text text-center p-0">
            <li class="mb-2">6500</li>
            <li>Total camping</li>
        </ul>
        <div class="left_seide_content_detail">
            <div class="left_top_detail_main d-flex">
                <ul class="chart_single_detail_main d-flex align-items-baseline me-4 pe-2">
                    <li class="chart_dote me-2"></li>
                    <li>Active camping <br> 6500</li>
                </ul>
                <ul class="chart_single_detail_main d-flex align-items-baseline ">
                    <li class="chart_dote dote_2 me-2"></li>
                    <li>completed camping amount<br>₹35000</li>
                </ul>
            </div>
            <div class="left_bottom_detail_main d-flex pt-3">
                <ul class="chart_single_detail_main d-flex align-items-baseline ">
                    <li class="chart_dote dote-3 me-2"></li>
                    <li>completed camping <br> 2000</li>
                </ul>
                <ul class="chart_single_detail_main d-flex align-items-baseline ">
                    <li class="chart_dote dote_4 me-2"></li>
                    <li>active camping amount<br>₹150054</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="chart_left_side_main d-flex align-items-center ms-5">
        <div id="container"></div>
        <ul class="chart_middel_text text-center p-0">
            <li class="mb-2">6500</li>
            <li>Total </li>
        </ul>
        <div class="left_seide_content_detail ms-5">
            <div class="left_top_detail_main d-flex">
                <ul class="chart_single_detail_main d-flex align-items-baseline me-4 pe-2">
                    <li class="chart_dote dote-5 me-2"></li>
                    <li>Click<br> 65000</li>
                </ul>
                <ul class="chart_single_detail_main d-flex align-items-baseline ">
                    <li class="chart_dote dote_6 me-2"></li>
                    <li>View<br>150000</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="mx-5 search_box_2 pt-0 d-flex align-items-center justify-content-end position-relative mb-0">
    <p class="mb-0 me-3 ">Result Out of 500 to 56000</p>
</div>

<div class="total_marketing_table_main m-5 mt-0">
    <div class="">
        <ul class="m-0 p-0 d-flex header_marketing">
            <li class="d-inline marketing_info_sr_no">Sr. No.</li>
            <li class="d-inline marketing_info_saller_name">Camping_name</li>
            <li class="d-inline marketing_info_total">Total Marketing Amount</li>
            <li class="d-inline marketing_info_mark_cate"> Seller_name</li>
            <li class="d-inline marketing_info_click">Click</li>
            <li class="d-inline marketing_info_view">View</li>
            <li class="d-inline marketing_info_click">Used camping amount</li>
            <li class="d-inline marketing_info_click">Date</li>
        </ul>
        <div class="scrollbar marketing_box" id="style-3">
            <div class="scroll_marketing">

                <ul class="m-0 p-0 d-flex mt-1">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>
                <ul class="m-0 p-0 d-flex mt-2">
                    <li class="d-inline marketing_info_sr_no logistic_sr_no_size">1</li>
                    <li class="d-inline marketing_info_saller_name">Vivek rudani</li>
                    <li class="d-inline marketing_info_total">231567951365 </li>
                    <li class="d-inline marketing_info_mark_cate"> Fashion</li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_view"></li>
                    <li class="d-inline marketing_info_click"></li>
                    <li class="d-inline marketing_info_click">dd/mm/yyyy</li>
                </ul>


            </div>
        </div>
    </div>
</div>
<!--End Total marketing ammount  -->
@endsection
@section('extra-js')
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script src="{{asset('admin/js/fusioncharts.theme.fusion.js')}}"></script>
<!-- <script src="{{asset('admin/js/chart.js')}}"></script> -->
<script>
    // doughnut  chart
anychart.onDocumentReady(function () {
  
  // add data
  var data = anychart.data.set([
    [ 34],
    [ 21],
    [ 15],
    [11],
    
  ]);
  
  // create a pie chart with the data
  var chart = anychart.pie(data);
  
  // set the chart radius making a donut chart
  chart.innerRadius('55%')

  // create a color palette
  var palette = anychart.palettes.distinctColors();
 
  // set the colors according to the brands
  palette.items([
    { color: '#1dd05d' },
    { color: '#000000' },
    { color: '#00a3da' },
    { color: '#156ef2' },
   
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

     const dataSource = {
     chart: {
      
       xaxisname: "",
       yaxisname: "",
       numbersuffix: "00",
       theme: "fusion",
       fontColor:'#1f4173',
     },
     data: [
       {
         label: "Fashion",
         value: "290",
         color: "#1F4173",
         fontColor:'#1f4173',
         fontFamily:'Aclonica'
       },
       {
         label: "Electronics",
         value: "260",
         color: "#16C31E",
         fontColor:'#1f4173',
       },
       {
         label: "Home",
         value: "180",
         color: "#FF5F00",
         fontColor:'#1f4173',
       },
       {
         label: "Beauty & Personal Care",
         value: "140",
         color: "#1F4173",
         fontColor:'#1f4173',

       },
       {
         label: "Men's Grooming",
         value: "115",
         color: "#2E7CF6",
         fontColor:'#1f4173',

       },
       {
         label: "Nutrition & Health Care",
         value: "100",
         color: "#FFBD00",
         fontColor:'#1f4173',

       },
       {
         label: "Baby Care",
         value: "60",
         color: "#C31162",
         fontColor:'#1f4173',

       },
       {
         label: "Mobiles",
         value: "200",
         color: "#7F8699",
         fontColor:'#1f4173',

       },
       {
         label: "Toys & School Supplies",
         value: "30",
         color: "#6C69BF",
         fontColor:'#1f4173',

       },
       {
         label: "Sports & Fitness",
         value: "70",
         color: "#16B9C3",
         fontColor:'#1f4173',

       },
       {
         label: "Books & Music",
         value: "40",
         color: "#86BEE9",
         fontColor:'#1f4173',

       },
       {
         label: "Stationery & Office Supplies",
         value: "90",
         color: "#C016C3",
         fontColor:'#1f4173',

       }, 
       {
          label: "Auto Accessories",
          value: "90",
         color: "#D6D6D6",
         fontColor:'#1f4173',

        },
        {
          label: "Orgenics",
          value: "90",
         color: "#4562FE",
         fontColor:'#1f4173',

        }
     ]
   };
   
   FusionCharts.ready(function() {
     var myChart = new FusionCharts({
       type: "column2d",
       renderAt: "chart-container",
       width: "100%",
       height: "100%",
       dataFormat: "json",
       dataSource
     }).render();
   });
</script>
@endsection