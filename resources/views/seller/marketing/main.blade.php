@extends('seller.layouts.master')

@section('extra-css')
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/marketing.css') }}">

    <!-- media css -->
    {{-- <link rel="stylesheet" href="{{ asset('seller-assets/css/media.css') }}"> --}}

    <style>
        .error-display {
            color: #FC0909;
        }

    </style>
@endsection

@section('content')
    {{-- <div class="main_wrapper"> --}}

    <!-- Main Content Start -->
    <div>
        <div class="main_content_lg">
            <div>
                <!-- <img src="{{ asset('seller-assets/image/marketing/calander_icon.png') }}" class="d-block" alt=""> -->
                <div class="my-5 marketing_btn">
                    <div class="">
                        <a href="{{ route('seller.marketing.form') }}" class="create_new_ads">Create new Ad’s</a>
                    </div>
                    <div class="">
                        <a href="#" class="avalible_balance_marketing">Avalible Balance
                            <span>₹25,00</span></a>
                    </div>
                </div>

            </div>
            <div class="mb-5">
                <div class="view_box_main">
                    <ul class="d-flex">
                        <li class="marketing_chart_single_box">
                            <div>
                                <span class="">Views</span>
                                <p class="views_clr">1,254</p>
                            </div>
                        </li>
                        <li class="marketing_chart_single_box">
                            <div>
                                <span>Clicks</span>
                                <p class="click_clr">809</p>
                            </div>
                        </li>
                        <li class="marketing_chart_single_box">
                            <div>
                                <span>Order’s</span>
                                <p class="order_clr">114</p>
                            </div>
                        </li>
                        <li class="marketing_chart_single_box">
                            <div>
                                <span>Conversetion</span>
                                <p class="conversation_clr">27%</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                         <div class="chart_main_marketing py-5 my-2 d-flex justify-content-between">
                              <!-- <div class="marketing_view_click_chart" id="marketing_view_click_chart">

                                =========== please Chart Here 

                              </div> -->
                              <ul class="pie_chart ">
                                   <div class="pie_chart_box">
                                        <div class="ms-2 py-4 d-flex position-relative justify-content-between align-items-center">
                                             <p>Conversation</p>
                                             <p class="box_threedote_conversation"><img src="assets/image/marketing/chat_box_marketing.png" class="img-fluid" alt=""></p>
     
                                        </div>
                                        <svg viewBox="0 0 64 64" class="pie">
                                             <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 75.3 100">
                                             </circle>
          
                                             <circle r="25%" cx="50%" cy="50%"
                                                  style="stroke-dasharray: 40.3 100; stroke: #AD62EE; stroke-dashoffset: -60.2; animation-delay: 0.5s">
                                             </circle>
                                             <circle r="25%" cx="50%" cy="50%"
                                                  style="stroke-dasharray: 50.3 100; stroke: #FFCE55; stroke-dashoffset: -10.2; animation-delay: 0.5s">
                                             </circle>
          
          
                                        </svg>
                                        <ul class="paichart_value marketing_pie_chart_value d-flex justify-content-center py-4">
                                             <li>
                                                  <div class="pai_chart_dot"></div>
                                                  <p>View’s </p>
                                             </li>
                                             <li>
                                                  <div class="pai_chart_dot"></div>
                                                  <p>Click’s</p>
                                             </li>
                                             <li>
                                                  <div class="pai_chart_dot"></div>
                                                  <p>Order’s</p>
                                             </li>
                                        </ul>
                                   </div>

                                   <div class="mt-4">
                                        <div class="position-relative">
                                             <img src="assets/image/marketing/order_conversation.png" class="img-fluid" alt="">
                                             <div class="layer_order_img_marketing">
                                                 <p class="order_text_marketing"> OrderConversetion</p>
                                             </div>
                                        </div>
                                   </div>
                              </ul>

                         </div>
            </div>
            <div class="overview_title mt-5">
                    <h2 class="text-dark">Overviwe</h2>
                    <p class="">More 400+ Clicks than last week </p>
            </div>
            <div class="table_wrap_marketing py-2">
                         <div class="main_marketing_scroll">
                              <div>

                                   <table class="marketing_main_table">
                                        <thead class="table_heding_marketing">
                                             <tr>
                                                  <th colspan="" class="text-start ps-4 ads_name_marketing">Ad’s Name</th>
                                                  <th colspan="">Buget</th>
                                                  <th colspan="">Views</th>
                                                  <th colspan="">Clicks</th>
                                                  <th colspan="">Order</th>
                                                  <th colspan="">Buget Spent</th>
                                                  <th colspan="">Action</th>
                                             </tr>
                                        </thead>
                                        <tbody class="marketing_body">
                                             <tr>
                                                  <td class="text-start ps-3">
                                                       <div class="d-flex align-items-center ">
                                                            <img src="assets/image/marketing/marketing_ads_icon.png" alt="">
                                                            <span class="ps-2">Brad Simmons </span>
                                                       </div>
                                                  </td>
                                                  <td class="">
                                                       <span class="d-block text-center">800</span>
                                                       <span class="d-block text-center in_proccess_marketing">In
                                                            Proccess</span>
                                                  </td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td><input type="checkbox" netliva-switch checked /></td>
                                             </tr>
                                             <tr>
                                                  <td class="text-start ps-3">
                                                       <div class="d-flex align-items-center ">
                                                            <img src="assets/image/marketing/marketing_ads_icon.png" alt="">
                                                            <span class="ps-2">Brad Simmons </span>
                                                       </div>
                                                  </td>
                                                  <td class="">
                                                       <span class="d-block text-center">800</span>
                                                       <span class="d-block text-center in_proccess_marketing">In
                                                            Proccess</span>
                                                  </td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td><input type="checkbox" netliva-switch checked /></td>
                                             </tr>
                                             <tr>
                                                  <td class="text-start ps-3">
                                                       <div class="d-flex align-items-center ">
                                                            <img src="assets/image/marketing/marketing_ads_icon.png" alt="">
                                                            <span class="ps-2">Brad Simmons </span>
                                                       </div>
                                                  </td>
                                                  <td class="">
                                                       <span class="d-block text-center">800</span>
                                                       <span class="d-block text-center in_proccess_marketing">In
                                                            Proccess</span>
                                                  </td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td><input type="checkbox" netliva-switch checked /></td>
                                             </tr>
                                             <tr>
                                                  <td class="text-start ps-3">
                                                       <div class="d-flex align-items-center ">
                                                            <img src="assets/image/marketing/marketing_ads_icon.png" alt="">
                                                            <span class="ps-2">Brad Simmons </span>
                                                       </div>
                                                  </td>
                                                  <td class="">
                                                       <span class="d-block text-center">800</span>
                                                       <span class="d-block text-center in_proccess_marketing">In
                                                            Proccess</span>
                                                  </td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td><input type="checkbox" netliva-switch checked /></td>
                                             </tr>
                                             <tr>
                                                  <td class="text-start ps-3">
                                                       <div class="d-flex align-items-center ">
                                                            <img src="assets/image/marketing/marketing_ads_icon.png" alt="">
                                                            <span class="ps-2">Brad Simmons </span>
                                                       </div>
                                                  </td>
                                                  <td class="">
                                                       <span class="d-block text-center">800</span>
                                                       <span class="d-block text-center in_proccess_marketing">In
                                                            Proccess</span>
                                                  </td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td><input type="checkbox" netliva-switch checked /></td>
                                             </tr>
                                             <tr>
                                                  <td class="text-start ps-3">
                                                       <div class="d-flex align-items-center ">
                                                            <img src="assets/image/marketing/marketing_ads_icon.png" alt="">
                                                            <span class="ps-2">Brad Simmons </span>
                                                       </div>
                                                  </td>
                                                  <td class="">
                                                       <span class="d-block text-center">800</span>
                                                       <span class="d-block text-center in_proccess_marketing">In
                                                            Proccess</span>
                                                  </td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td><input type="checkbox" netliva-switch checked /></td>
                                             </tr>
                                             <tr>
                                                  <td class="text-start ps-3">
                                                       <div class="d-flex align-items-center ">
                                                            <img src="assets/image/marketing/marketing_ads_icon.png" alt="">
                                                            <span class="ps-2">Brad Simmons </span>
                                                       </div>
                                                  </td>
                                                  <td class="">
                                                       <span class="d-block text-center">800</span>
                                                       <span class="d-block text-center in_proccess_marketing">In
                                                            Proccess</span>
                                                  </td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td><input type="checkbox" netliva-switch checked /></td>
                                             </tr>
                                             <tr>
                                                  <td class="text-start ps-3">
                                                       <div class="d-flex align-items-center ">
                                                            <img src="assets/image/marketing/marketing_ads_icon.png" alt="">
                                                            <span class="ps-2">Brad Simmons </span>
                                                       </div>
                                                  </td>
                                                  <td class="">
                                                       <span class="d-block text-center">800</span>
                                                       <span class="d-block text-center in_proccess_marketing">In
                                                            Proccess</span>
                                                  </td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td>520</td>
                                                  <td>120</td>
                                                  <td><input type="checkbox" netliva-switch checked /></td>
                                             </tr>
                                     
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
        </div>


        <!--Start profile Modal -->
        <div class="modal fade" id="exampleModal_2" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                    <img src="assets/image/image_bluk/profile_pic_model.png" class="profile_img_round"
                                        alt="">
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
    </div>
    <!--End profile Model -->
    <!-- Main Content End -->
@endsection

@section('extra-script')
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <!-- india map seccond file -->
    <!-- Toggle JS -->

    <script src="{{ asset('seller-assets/js/marketing.js') }}"></script>

    <script>
        $(document).ready(function() {
            //Popover Js
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        });


    </script>
    <!-- Toggle JS End -->
@endsection
