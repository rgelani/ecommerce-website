@extends('admin.layouts.master')
@section('content')
<!-- strat product section-1 -->
<div class="product_section_main p-5">
     <div class="row">
          <div class="col-xl-3  col-md-6 col-sm-12">
               <div class="item product_box d-flex justify-content-between p-4">
                    <div class="product_box_text">
                         <p>Total Product</p>
                         <h2>56</h2>
                         <p>Quality</p>
                    </div>
                    <div class="product_box_icon">
                         <img src="{{ asset('admin/image/total_product.png') }}" alt="total-product">
                         <img src="{{ asset('admin/image/product_arrow.png') }}" alt="arrow" class="d-block pt-5 ">
                    </div>
               </div>
          </div>
          <div class="col-xl-3  col-md-6 col-sm-12  mt-xl-0 ps-3">
               <div class="item product_box_2 product_box d-flex justify-content-between p-4">
                    <div class="product_box_text">
                         <p>Total Product</p>
                         <h2>56</h2>
                         <p>Quality</p>
                    </div>
                    <div class="product_box_icon">
                         <img src="{{ asset('admin/image/pandding_product.png') }}" alt="total-product">
                         <img src="{{ asset('admin/image/product_arrow.png') }}" alt="arrow" class="d-block pt-5 ">
                    </div>
               </div>
          </div>
          <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3">
               <div class="item product_box_3 product_box d-flex justify-content-between p-4">
                    <div class="product_box_text">
                         <p>Total Product</p>
                         <h2>56</h2>
                         <p>Quality</p>
                    </div>
                    <div class="product_box_icon">
                         <img src="{{ asset('admin/image/pass_product.png') }}" alt="total-product">
                         <img src="{{ asset('admin/image/product_arrow.png') }}" alt="arrow" class="d-block pt-5 ">
                    </div>
               </div>
          </div>
          <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-3">
               <div class="item product_box_4 product_box d-flex justify-content-between p-4">
                    <div class="product_box_text">
                         <p>Total Product</p>
                         <h2>56</h2>
                         <p>Quality</p>
                    </div>
                    <div class="product_box_icon">
                         <img src="{{ asset('admin/image/error_product.png') }}" alt="total-product">
                         <img src="{{ asset('admin/image/product_arrow.png') }}" alt="arrow" class="d-block pt-5 ">
                    </div>
               </div>
          </div>
     </div>
</div>
<!--end rating section -->

<!-- start slider section-2 -->
<div class="owl_carousel_main m-5 pb-5">
     <div class="owl-carousel owl-theme" id="dashbord_slider">
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/fashion.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Fashion</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">200K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/electronic.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Electronics</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">267K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/home.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Home</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">270K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/beuty_perseon_care.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Beauty & Personal Care</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">684.30K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/men_grooming.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Men's Grooming</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">270K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/nuthrition_&_ealth_care.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Nutrition & Health Care</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">200K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/baby_care.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Baby Care</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">230K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/toy.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Toys & School Supplies</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">270K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/sports.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Sports & Fitness</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">300K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/books.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Books & Music</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">320K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/stationary.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Stationery & Office Supplies</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">340K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/auto_assesary.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p>Auto Accessories</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">380K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/safty.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p> Safety & Hygiene Essentials</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">280K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
          <div class="item slider_box py-3 px-4 pt-4">
               <div class="icon_and_name_main d-flex align-items-center mb-3 ">
                    <img src="{{ asset('admin/image/organics.png') }}" alt="fashion" name="fashio" class="me-3">
                    <p> Orgenics</p>
               </div>
               <div class="number_and_arrow_main d-flex align-items-center justify-content-between">
                    <h2 class="me-3">240K</h2>
                    <img src="{{ asset('admin/image/item_arrow.png') }}" alt="fashion" name="fashio" class="item_arrow">
               </div>
          </div>
     </div>
</div>
<!-- end slider section-2 -->

<!-- start chart -->
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
<!-- end chart -->

<!--start rating section -->
<div class="product_view_rating">
     <!--start search boxend prduct count -->
     <div class="search_box_2 d-flex align-items-center justify-content-between mb-5 position-relative">
          <select class="bgc">
               <option value="Search your Category" selected>Search your Category</option>
               <option value="Fashion">Fashion</option>
               <option value="Electronics">Electronics</option>
               <option value="Home">Home</option>
               <option value="Beauty & Personal Care">Beauty & Personal Care</option>
               <option value="Men's Grooming">Men's Grooming</option>
               <option value="Nutrition & Health Care">Nutrition & Health Care</option>
               <option value="Toys & School Supplies">Toys & School Supplies</option>
               <option value="Sports & Fitness">Sports & Fitness</option>
               <option value="Books & Music">Books & Music</option>
               <option value="Stationery & Office Supplies">Stationery & Office Supplies</option>
               <option value="Auto Accessories">Auto Accessories</option>
               <option value="  Safety & Hygiene Essentials"> Safety & Hygiene Essentials</option>
               <option value="  Orgenics">Orgenics</option>
          </select>

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
                              <img src="image/product_img.png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">2</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (2).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">3</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (3).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">4</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (4).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">5</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (5).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">6</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">7</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">8</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">9</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">10</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">11</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">12</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">13</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">14</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">15</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">16</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">17</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">18</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">19</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">20</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">21</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">22</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">23</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">24</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">25</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">26</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">27</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">28</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">29</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">30</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">31</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">32</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">33</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">34</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">35</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">36</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">37</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">38</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">39</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">40</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">41</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">42</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">43</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">44</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">45</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">46</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">47</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">48</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">49</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">50</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">51</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">52</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">53</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">54</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">55</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">56</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">57</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">58</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">59</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">60</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">61</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">62</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">63</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">64</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">65</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">66</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">67</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">68</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">69</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">70</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">71</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">72</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">73</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">74</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">75</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">76</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">77</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">78</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">79</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">80</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">81</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">82</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">83</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">84</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">85</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">86</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">87</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">88</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">89</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">90</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">91</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">92</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">93</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">94</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">95</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">96</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">97</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">98</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">99</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">100</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">101</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">102</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">103</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">104</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">105</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">106</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">107</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">108</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">109</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">110</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">111</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">112</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">113</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">114</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">115</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">116</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">117</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">118</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">119</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">120</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">121</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating ">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">122</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">123</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">124</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">125</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">126</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">127</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">128</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">129</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">130</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">131</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">132</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">133</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">134</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">135</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">136</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">137</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">138</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">139</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">140</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">141</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">142</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">143</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">144</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">145</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">146</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">147</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">148</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">149</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">150</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">151</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">152</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">153</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">154</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">155</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">156</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">157</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">158</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">159</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">160</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">161</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">162</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">163</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">164</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">165</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">166</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">167</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">168</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">169</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">170</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">171</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">172</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">173</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">174</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">175</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">176</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">177</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">178</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">179</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">180</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">181</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">182</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">183</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">184</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">185</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">186</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">187</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">188</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">189</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">190</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">191</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">192</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">193</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">194</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">195</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">196</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">197</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">198</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">199</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
                              <span class="pb-0 mb=0 ms-1">4.2</span>
                         </li>
                         <li class="list_single_check action_rating">
                              <a href="#" class="edit_rating_btn">Edit</a>
                         </li>
                    </ul>
                    <ul class="d-flex rating_single_main rating_heiding  ps-0 align-items-center    mb-0">
                         <li class="sr_no_rating sr_no_rating_size">200</li>
                         <li class="product_name_rating d-flex align-items-center">
                              <img src="image/product_img (1).png" alt="" class="img-fluid">
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
                         <li class="list_single_check  list_single_check_rating d-flex justify-content-center align-items-center">
                              <a href="#" class="d-block"><img src="image/rating_star.png"></a>
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
<!--end rating section -->
@endsection
@section('extra-js')
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script src="{{asset('admin/js/fusioncharts.theme.fusion.js')}}"></script>
<!-- <script src="{{asset('admin/js/chart.js')}}"></script> -->
<script>
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