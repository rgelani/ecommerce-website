@extends('admin.layouts.master')

@section('content')
@can("role-list", "admin")
<a href="{{ route('admin.role.index') }}" class="btn btn-info">Roles</a>
@endcan
@can("admin-list", "admin")
<!-- <a href="" class="btn btn"></a> -->
@endcan

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
                    <img src="{{ asset('admin-assets/image/total-product.png') }}" alt="total-produc">
                    <img src="{{ asset('admin-assets/image/product_arrow.png') }}" alt="arrow" class="d-block pt-5 ">
                </div>
            </div>
        </div>
        <div class="col-xl-3  col-md-6 col-sm-12  mt-xl-0 ps-3">
            <div class="item product_box_2 product_box d-flex justify-content-between p-4">
                <div class="product_box_text">
                    <p>Pandding product</p>
                    <h2>56</h2>
                    <p>Quality</p>
                </div>
                <div class="product_box_icon">
                    <img src="{{ asset('admin-assets/image/pandding_product.png') }}" alt="total-produc">
                    <img src="{{ asset('admin-assets/image/product_arrow.png') }}" alt="arrow" class="d-block pt-5 ">
                </div>
            </div>
        </div>
        <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3">
            <div class="item product_box_3 product_box d-flex justify-content-between p-4">
                <div class="product_box_text">
                    <p>Q/c pass product</p>
                    <h2>56</h2>
                    <p>Quality</p>
                </div>
                <div class="product_box_icon">
                    <img src="{{ asset('admin-assets/image/pass-product.png') }}" alt="total-produc">
                    <img src="{{ asset('admin-assets/image/product_arrow.png') }}" alt="arrow" class="d-block pt-5 ">
                </div>
            </div>
        </div>
        <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-3">
            <div class="item product_box_4 product_box d-flex justify-content-between p-4">
                <div class="product_box_text">
                    <p>Q/c error product</p>
                    <h2>56</h2>
                    <p>Quality</p>
                </div>
                <div class="product_box_icon">
                    <img src="{{ asset('admin-assets/image/error_product.png') }}" alt="total-produc">
                    <img src="{{ asset('admin-assets/image/product_arrow.png') }}" alt="arrow" class="d-block pt-5 ">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="owl_carousel_main m-5 pb-5">
    <div class="owl-carousel owl-theme" id="dashbord_slider">
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/fashion.png') }}" alt="fashion" name="fashio" class="me-3">
                <p>Fashion</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">200K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/electronic.png') }}" alt="fashion" name="fashio" class="me-3">
                <p>Electronics</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">267K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/home.png') }}" alt="fashion" name="fashio" class="me-3">
                <p>Home</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">270K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/beuty_perseon_care.png') }}" alt="fashion" name="fashio"
                    class="me-3">
                <p>Beauty & Personal Care</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">684.30K</h2>
                <img src="{{ asset('admin-assets/image/search_big_icon.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/Mens-Grooming.png') }}" alt="fashion" name="fashio" class="me-3">
                <p>Mens Grooming</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">270K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/Nutrition & Health Care.png') }}" alt="fashion" name="fashio"
                    class="me-3">
                <p>Nutrition & Health Care</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">200K</h2>
                <img src="{{ asset('admin-assets/image/search_big_icon.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/Baby Care.png') }}" alt="fashion" name="fashio" class="me-3">
                <p>Baby Care</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">230K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/search_big_icon.png') }}" alt="fashion" name="fashio"
                    class="me-3">
                <p>Toys & School Supplies</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">270K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/sports.png') }}" alt="fashion" name="fashio"
                    class="me-3">
                <p>Sports & Fitness</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">300K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/books.png') }}" alt="fashion" name="fashio" class="me-3">
                <p>Books & Music</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">320K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/stationary.png') }}" alt="fashion" name="fashio" class="me-3">
                <p>Stationery & Office Supplies</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">340K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/auto_assesary.png') }}" alt="fashion" name="fashio" class="me-3">
                <p>Auto Accessories</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">380K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/safty.png') }}" alt="fashion" name="fashio" class="me-3">
                <p> Safety & Hygiene Essentials</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">280K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
        <div class="item slider_box py-3 px-4 pt-4">
            <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                <img src="{{ asset('admin-assets/image/organics (2).png') }}" alt="fashion" name="fashio" class="me-3">
                <p> Orgenics</p>
            </div>
            <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                <h2 class="me-3">240K</h2>
                <img src="{{ asset('admin-assets/image/item_arrow.png') }}" alt="fashion" name="fashio"
                    class="item_arrow">
            </div>
        </div>
    </div>
</div>
<div id="chart-container" class="chart m-5 "> </div>
<div class="chart_text position-absolute">Product's summary</div>
<div class="date_and_month_main">
    <input type="date" class="date_main">
    <select class="chart_text_right position-absolute ">
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
<div class="product_view_rating">
    <!--start search boxend prduct count -->
    <div class=" d-flex align-items-center justify-content-between mb-5 position-relative">
        <div class="  d-flex align-items-center justify-content-between position-relative">
            <input type="text" class="bgc search_commn" placeholder="Search by Product">
            <span class="ModalCarrot logistic_search_icon">
                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                    <path
                        d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z" />
                </svg>
            </span>
        </div>
        <!-- <img src="image/dropdown_icon.png" alt="" class=""> -->
        <p class="out_of_text mb-0 me-3">200 out of 10000</p>
    </div>
    <!--start search boxend prduct count -->
    <!-- strat product listing main -->
    <div class="product_listing_main ">
        <ul class="d-flex single_pro_main single_heiding p-0 ps-0 align-items-center mb-0">
            <li class="sr_no_rating">Sr. No.</li>
            <li class="product_name_rating">product</li>
            <li class="rating_category">Category</li>
            <li class="rating_no_veration">
                No.Of veration
            </li>
            <li class="stock_rating">Stock</li>
            <li class="ikart_price_rating veration_pad">
                iKart's price
            </li>
            <li class="gst_rating">GST%</li>
            <li class="shipping_charges_rating veration_pad">
                Shipping charges
            </li>
            <li class="amount_rating">Amount</li>
            <li class="total_order_rating">
                Total Order
            </li>
            <li class="return_order_rating">Return Order</li>
            <li class="panalty_rating">panalty</li>
            <li class=" sales_rating">Sales</li>
            <li class="saler_name_rating">Saller Name</li>
            <li class="list_single_check list_single_check_rating">Rating</li>
            <li class="list_single_check action_rating">Action</li>
        </ul>
        <div class="force-overflow single_rating_main">
            <div class="scrollbar" id="style-3">
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">1</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img.png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple Watch Series 5</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">524</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">2</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (2).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple iPhone 11 (64GB,
                            Black)</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">254</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">3</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (3).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple iMac 27-inch</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">10020</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">4</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (4).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple Watch Series 5</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">panalty</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">5</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (5).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple Watch Series 5</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">panalty</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">6</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (1).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple Watch Series 5</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">panalty</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">7</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (1).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple Watch Series 5</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">panalty</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">8</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (1).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple Watch Series 5</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">panalty</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">9</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (1).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple Watch Series 5</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">panalty</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
                <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                    <li class="sr_no_rating sr_no_rating_size">10</li>
                    <li class="product_name_rating d-flex align-items-center">
                        <img src="{{ asset('admin-assets/image/product_img (1).png') }}" alt="" class="img-fluid">
                        <p class="pb-0 mb-0 text-start ms-2">Apple Watch Series 5</p>
                    </li>
                    <li class="rating_category"></li>
                    <li class="rating_no_veration">
                    </li>
                    <li class="stock_rating">255</li>
                    <li class="ikart_price_rating veration_pad">
                        ₹600
                    </li>
                    <li class="gst_rating">18%</li>
                    <li class="shipping_charges_rating veration_pad">
                        ₹64
                    </li>
                    <li class="amount_rating">AE</li>
                    <li class="total_order_rating">
                    </li>
                    <li class="return_order_rating"> </li>
                    <li class="panalty_rating">panalty</li>
                    <li class=" sales_rating">90%</li>
                    <li class="saler_name_rating">XYZ</li>
                    <li
                        class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block"><img src="{{ asset('admin-assets/image/rating_star.png') }}"></a>
                        <span class="pb-0 mb=0 ms-1">4.2</span>
                    </li>
                    <li class="list_single_check action_rating">
                        <a href="#" class="edit_rating_btn">Edit</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
