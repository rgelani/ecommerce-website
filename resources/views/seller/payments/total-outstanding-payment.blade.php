@extends('seller.layouts.master')

@section('extra-css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/image_bulk_upload.css')}}">
/<link type="text/css" rel="stylesheet" href="{{asset('seller-assets/css/image-uploader.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/payment.css')}}">
@endsection

@section('content')
<div class="main_content_lg" id="payment">
        <h3 class="payment_title">Payment Overview</h3>
        <div class="top_payment_header_main">
          <div class="">
            <ul class="payment_heading">
              <li><a class="" href="payment.html">Next payment</a></li>
              <li><a class="" href="last_payment.html">Last payment</a></li>
              <li>
                <a class="active_border" href="total_outstading.html">Total Outstanding</a>
              </li>
              <li><a href="penelty.html">penelty</a></li>
              <li><a href="tcs.html">TCS</a></li>
              <li><a href="completed_payment.html">Completed payment</a></li>
            </ul>
          </div>
          <div class="donut_pie_chart">
            <div class="chart_left_side_main d-flex align-items-center">
              <div id="container"></div>
              <ul class="chart_middel_text text-center p-0">
                <li class="mb-2">₹6500</li>
                <li>Total</li>
              </ul>
              <div class="left_seide_content_detail">
                <div class="left_top_detail_main d-flex justify-content-between">
                  <ul class="chart_single_detail_main d-flex align-items-baseline">
                    <li class="chart_dote me-2"></li>
                    <li>
                      Active&nbsp;&nbsp;camping<br />
                      <span class="d-block">6500</span>
                    </li>
                  </ul>
                  <ul class="chart_single_detail_main d-flex align-items-baseline">
                    <li class="chart_dote dote_2 me-2"></li>
                    <li>completed&nbsp;&nbsp;camping<br />₹35000</li>
                  </ul>
                </div>
                <div class="left_bottom_detail_main d-flex pt-3 justify-content-between">
                  <ul class="chart_single_detail_main d-flex align-items-baseline">
                    <li class="chart_dote dote-3 me-2"></li>
                    <li>Total&nbsp;&nbsp;penalty<br />2000</li>
                  </ul>
                  <ul class="chart_single_detail_main d-flex align-items-baseline">
                    <li class="chart_dote dote_4 me-2"></li>
                    <li>pandding&nbsp;&nbsp;penalty<br />₹150054</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-3 main_table_out_stading main-table-scroll">
        <!--Begin::table  -->
        <div class="total-out-standing mt-0 scroll_marketing">
          <table class="table-warapper scrollbar table  table-striped tableFixHead table-curved" id="style-1" >
               <thead class=" table-hedding ">
                    <tr class=" ">
                         <th>No of order</th>
                         <th> Total payment</th>
                         <th>Shhiping chrges</th>
                         <th>Penelty</th>
                         <th> TCS</th>
                         <th>Net payble Amount</th>
                    </tr>  
               </thead>
               <tbody class="table-body force-overflow">                  
                    <tr class="">
                        <td>sd</td>
                        <td>sd</td>
                        <td>df</td>
                        <td>dsf</td>
                        <td>df</td>
                        <td>dsf</td>
                    </tr>
                                                      
                                              
                          
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                    <tr class="">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>                                       
                                                           
               </tbody>                                  
          </table>
        </div>
        <!--End::table  -->
          <div class="mt-4 transection_payment outstanding_total_left_table">
            <div class="d-flex justify-content-between">
              <p class="transaction_heading_title">Transection</p>
              <p class="see_all_color_payment">See all</p>
            </div>
            <ul>
              <li class="d-flex justify-content-between">
                <ul class="w-100">
                  <li class="d-flex m-0 image_dp_main">
                    <div class="listing-img">
                      <img src="assets/image/payment/payment_profile_pic.png" class="img-fluid" alt="">
                    </div>
                    <div class="ps-2">
                      <p class="">Bank Tranfar</p>
                      <span>25 April at 09:30 am</span>
                    </div>
                    <div class="ms-auto"> Rs.132</div>
                  </li>
                  <li class="d-flex m-0 image_dp_main">
                    <div class="listing-img">
                      <img src="assets/image/payment/payment_profile_pic.png" class="img-fluid" alt="">
                    </div>
                    <div class="ps-2">
                      <p class="">Bank Tranfar</p>
                      <span>25 April at 09:30 am</span>
                    </div>
                    <div class="ms-auto"> Rs.132</div>
                  </li>
                  <li class="d-flex m-0 image_dp_main">
                    <div class="listing-img">
                      <img src="assets/image/payment/payment_profile_pic.png" class="img-fluid" alt="">
                    </div>
                    <div class="ps-2">
                      <p class="">Bank Tranfar</p>
                      <span>25 April at 09:30 am</span>
                    </div>
                    <div class="ms-auto"> Rs.132</div>
                  </li>
                  <li class="d-flex m-0 image_dp_main">
                    <div class="listing-img">
                      <img src="assets/image/payment/payment_profile_pic.png" class="img-fluid" alt="">
                    </div>
                    <div class="ps-2">
                      <p class="">Bank Tranfar</p>
                      <span>25 April at 09:30 am</span>
                    </div>
                    <div class="ms-auto"> Rs.132</div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="download_btn d-flex m-0 py-4">
          <a href="#">Download Report</a>
        </div>
      </div>
@endsection

@section('extra-script')
<script src="{{asset('seller-assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="{asset('seller-assets//js/order.js"></script>
    <script src="{{asset('seller-assets//js/payment_chart/anychart-core.min.js')}}"></script>
    <script src="{{asset('seller-assets//js/payment_chart/anychart-pie.min.js')}}"></script>
    <script src="{{asset('seller-assets//js/custom.js')}}"></script>

@endsection