@extends('seller.layouts.master')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/cancle.css') }}">
    <link rel="stylesheet" href="{{ asset('seller-assets/css/wallet_pie_chat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/wallet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/wallet_pie_chat.css') }}">
    <link href="{{ asset('seller-assets/css/sweetalert.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="main_content_lg">
                    <div>
                       
                         <div class="cancle_by_customer_main_box text-start">
                              <div class="cancle_single_box wallet_balance_box_curent_balance">
                                   <span> Cancle by Customer</span>
                                   <p>12%</p>
                              </div>
                              <div class="cancle_single_box cancle_single_box_green wallet_balance_box_Bonus_balance">
                                   <span> Cancle by Customer</span>
                                   <p>7%</p>
                              </div>
                              <div class="cancle_single_box cancle_single_box_green cadd_to_wallet_btn">
                                   <div class="">
                                        <a href="#" class="create_new_ads" type="button" data-bs-toggle="modal"
                                             data-bs-target="#exampleModal_2">Add to wallet</a>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="w-100 main_info_wallet mt-5 justify-content-between">
                         <div class="wallet_transaction ">
                              <div class="w-100">
                                   <div class="w-100 m-0 d-flex align-items-start justify-content-between py-3">
                                        <p class="ms-2 title_box_wallet">Transaction</p>
                                        <p class="treedot_wallet text-end"><span class="text-end ">...</span></p>
                                   </div>

                              </div>
                              <div class="table_wallet_main ">
                                   <table class="w-100">
                                        <thead>
                                             <tr class="heading_wallet_main">
                                                  <th class="p-2 check_box_hide">
                                                       <label class="checkbox bounce">
                                                            <input type="checkbox" id="check_box">
                                                            <svg viewBox="0 0 21 21">
                                                                 <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                            </svg>
                                                       </label>
                                                  </th>
                                                  <th class="transaction_id">transaction_id</th>
                                                  <th class="name_wallet">Name</th>
                                                  <th class="amount_wallet">Amount</th>
                                                  <th class="date_wallet">Date</th>
                                                  <th class="download_threedot download_threedot_hide"><img
                                                            src="assets/image/wallet/download_wallet.png')}}" alt=""> </th>
                                                  <th class="dote_trasaction"> <a href="#"> <img
                                                                 src="{{ asset('seller-assets/image/wallet/round_dot_transaction.png')}}"
                                                                 alt=""></a> </th>
                                             </tr>
                                        </thead>


                                        <tr class="">
                                             <td class="ps-1">
                                                  <label class="checkbox bounce">
                                                       <input type="checkbox" id="check_box">
                                                       <svg viewBox="0 0 21 21">
                                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                       </svg>
                                                  </label>
                                             </td>
                                             <td class="transaction_id">DC02</td>
                                             <td class="name_wallet">Isaiah Howard</td>
                                             <td class="amount_wallet">120%</td>
                                             <td class="date_wallet">04-11-2018</td>
                                             <td class="download_threedot ">
                                             <th class="download_threedot download_threedot_hide"><a href="#"><img
                                                            src="{{ asset('seller-assets/image/wallet/download_wallet.png')}}" alt=""></a>
                                             </th>
                                             </td>
                                             <td class="dote_trasaction"></td>
                                        </tr>
                                        <tr class="bg_active_wallet">
                                             <td class="ps-1">
                                                  <label class="checkbox bounce">
                                                       <input type="checkbox" id="check_box">
                                                       <svg viewBox="0 0 21 21">
                                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                       </svg>
                                                  </label>
                                             </td>
                                             <td class="transaction_id">DC02</td>
                                             <td class="name_wallet">Isaiah Howard</td>
                                             <td class="amount_wallet">120%</td>
                                             <td class="date_wallet">04-11-2018</td>
                                             <td class="download_threedot">
                                                  <a href="">
                                                       <img src="{{ asset('seller-assets/image/wallet/download_wallet.png')}}" alt="">
                                             </td>
                                             </a>
                                             <td class="dote_trasaction">
                                                  <img src="{{ asset('seller-assets/image/wallet/three_dote_wallet_info.png')}}" alt="">
                                             </td>
                                        </tr>
                                        <tr class="">
                                             <td class="ps-1">
                                                  <label class="checkbox bounce">
                                                       <input type="checkbox" id="check_box">
                                                       <svg viewBox="0 0 21 21">
                                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                       </svg>
                                                  </label>
                                             </td>
                                             <td class="transaction_id">DC02</td>
                                             <td class="name_wallet">Isaiah Howard</td>
                                             <td class="amount_wallet">120%</td>
                                             <td class="date_wallet">04-11-2018</td>
                                             <td class="download_threedot download_threedot_hide"> </td>
                                             <td class="dote_trasaction"><a href="#"> <img
                                                            src="{{ asset('seller-assets/image/wallet/dot_bg_wallet.png')}}" alt=""></a></td>
                                        </tr>
                                        <tr class="">
                                             <td class="ps-1">
                                                  <label class="checkbox bounce">
                                                       <input type="checkbox" id="check_box">
                                                       <svg viewBox="0 0 21 21">
                                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                       </svg>
                                                  </label>
                                             </td>
                                             <td class="transaction_id">DC02</td>
                                             <td class="name_wallet">Isaiah Howard</td>
                                             <td class="amount_wallet">120%</td>
                                             <td class="date_wallet">04-11-2018</td>
                                             <td class="download_threedot"></td>
                                             <td class="dote_trasaction"></td>
                                        </tr>
                                        <tr class="">
                                             <td class="ps-1">
                                                  <label class="checkbox bounce">
                                                       <input type="checkbox" id="check_box">
                                                       <svg viewBox="0 0 21 21">
                                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                       </svg>
                                                  </label>
                                             </td>
                                             <td class="transaction_id">DC02</td>
                                             <td class="name_wallet">Isaiah Howard</td>
                                             <td class="amount_wallet">120%</td>
                                             <td class="date_wallet">04-11-2018</td>
                                             <td class="download_threedot"></td>
                                             <td class="dote_trasaction"></td>
                                        </tr>
                                   </table>

                              </div>
                         </div>
                         <div class="wallet_history_main">
                              <div class="wallet_history_table">
                                   <div class="w-100 m-0 pe-1">
                                        <div class="w-100 m-0 py-2 d-flex align-items-start justify-content-between">
                                             <p class="ms-2 title_box_wallet">wallet history</p>
                                             <p class="treedot_wallet text-end"><span class="text-end ">...</span></p>
                                        </div>
                                        <ul class="m-0 p-0 w-100 main_monthly_list">
                                             <li class="d-flex justify-content-between align-items-center">
                                                  <div class="m-0 ms-2 use_single_box">
                                                       <div class="m-0"><a href="#"><img
                                                                      src="{{ asset('seller-assets/image/wallet/wallet_history_1.png')}}"
                                                                      alt="" class="  "></a></div>
                                                       <div class="m-0  use_for_marketing">
                                                            <p>Deposit from Outstanding</p>
                                                            <span class="date_marketing">5 march, 18:33</span>
                                                       </div>
                                                  </div>
                                                  <p class="ammount_monthly ammount_monthly_red">- 2,220</p>
                                             </li>
                                             <li class="d-flex justify-content-between align-items-center">
                                                  <div class="m-0 ms-2 use_single_box">
                                                       <div class="m-0"><a href="#"><img
                                                                      src="{{ asset('seller-assets/image/wallet/wallet_history_2.png')}}"
                                                                      alt="" class="  "></a></div>
                                                       <div class="m-0  use_for_marketing">
                                                            <p>Deposit UPI</p>
                                                            <span class="date_marketing">5 march, 18:33</span>
                                                       </div>
                                                  </div>
                                                  <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                             </li>
                                             <li class="d-flex justify-content-between align-items-center">
                                                  <div class="m-0 ms-2 use_single_box">
                                                       <div class="m-0"><a href="#"><img
                                                                      src="{{ asset('seller-assets/image/wallet/wallet_history_3.png')}}"
                                                                      alt="" class="  "></a></div>
                                                       <div class="m-0  use_for_marketing">
                                                            <p>Deposit from Card</p>
                                                            <span class="date_marketing">5 march, 18:33</span>
                                                       </div>
                                                  </div>
                                                  <p class="ammount_monthly ammount_monthly_red">- 2,220</p>
                                             </li>
                                             <li class="d-flex justify-content-between align-items-center">
                                                  <div class="m-0 ms-2 use_single_box">
                                                       <div class="m-0"><a href="#"><img
                                                                      src="{{ asset('seller-assets/image/wallet/wallet_history_4.png')}}"
                                                                      alt="" class="  "></a></div>
                                                       <div class="m-0  use_for_marketing">
                                                            <p>Cancelled</p>
                                                            <span class="date_marketing">5 march, 18:33</span>
                                                       </div>
                                                  </div>
                                                  <p class="ammount_monthly ammount_monthly_red">- 2,220</p>
                                             </li>
                                             <li class="d-flex justify-content-between align-items-center">
                                                  <div class="m-0 ms-2 use_single_box">
                                                       <div class="m-0"><a href="#"><img
                                                                      src="{{ asset('seller-assets/image/wallet/wallet_history_5.png')}}"
                                                                      alt="" class="  "></a></div>
                                                       <div class="m-0  use_for_marketing">
                                                            <p>Use For Markentig</p>
                                                            <span class="date_marketing">5 march, 18:33</span>
                                                       </div>
                                                  </div>
                                                  <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                             </li>
                                             <li class="d-flex justify-content-between align-items-center">
                                                  <div class="m-0 ms-2 use_single_box">
                                                       <div class="m-0"><a href="#"><img
                                                                      src="{{ asset('seller-assets/image/wallet/wallet_history_1.png')}}"
                                                                      alt="" class="  "></a></div>
                                                       <div class="m-0  use_for_marketing">
                                                            <p>Deposit from UPI</p>
                                                            <span class="date_marketing">5 march, 18:33</span>
                                                       </div>
                                                  </div>
                                                  <p class="ammount_monthly ammount_monthly_red">- 2,220</p>
                                             </li>
                                        </ul>
                                   </div>

                              </div>
                              <div class="wallet_history_table bounce_history_main m-0 my-4 ">
                                   <div class="">
                                        <div class="w-100 m-0 me-1">
                                             <div
                                                  class="w-100 m-0 py-2 d-flex align-items-start justify-content-between ">
                                                  <p class="ms-2 title_box_wallet">Monthly Used</p>
                                                  <p class="treedot_wallet text-end"><span
                                                            class="text-end pe-2">...</span></p>
                                             </div>

                                             <ul class="m-0 p-0 pe-1 w-100  main_monthly_list">
                                                  <li class="d-flex justify-content-between align-items-center">
                                                       <div class="m-0 ms-2 use_single_box">
                                                            <div class="m-0"><a href="#"><img
                                                                           src="{{ asset('seller-assets/image/wallet/wallet_profile_dp.jpg')}}"
                                                                           alt="" class="  "></a></div>
                                                            <div class="m-0  use_for_marketing">
                                                                 <p>Seller Name</p>
                                                                 <span class="date_marketing">5 march, 18:33</span>
                                                            </div>
                                                       </div>
                                                       <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                                  </li>
                                                  <li class="d-flex justify-content-between align-items-center">
                                                       <div class="m-0 ms-2 use_single_box">
                                                            <div class="m-0"><a href="#"><img
                                                                           src="{{ asset('seller-assets/image/wallet/wallet_profile_dp.jpg')}}"
                                                                           alt="" class="  "></a></div>
                                                            <div class="m-0  use_for_marketing">
                                                                 <p>Seller Name</p>
                                                                 <span class="date_marketing">5 march, 18:33</span>
                                                            </div>
                                                       </div>
                                                       <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                                  </li>
                                                  <li class="d-flex justify-content-between align-items-center">
                                                       <div class="m-0 ms-2 use_single_box">
                                                            <div class="m-0"><a href="#"><img
                                                                           src="{{ asset('seller-assets/image/wallet/wallet_profile_dp.jpg')}}"
                                                                           alt="" class="  "></a></div>
                                                            <div class="m-0  use_for_marketing">
                                                                 <p>Seller Name</p>
                                                                 <span class="date_marketing">5 march, 18:33</span>
                                                            </div>
                                                       </div>
                                                       <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                                  </li>
                                                  <li class="d-flex justify-content-between align-items-center">
                                                       <div class="m-0 ms-2 use_single_box">
                                                            <div class="m-0"><a href="#"><img
                                                                           src="{{ asset('seller-assets/image/wallet/wallet_profile_dp.jpg')}}"
                                                                           alt="" class="  "></a></div>
                                                            <div class="m-0  use_for_marketing">
                                                                 <p>Seller Name</p>
                                                                 <span class="date_marketing">5 march, 18:33</span>
                                                            </div>
                                                       </div>
                                                       <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                                  </li>
                                                  <li class="d-flex justify-content-between align-items-center">
                                                       <div class="m-0 ms-2 use_single_box">
                                                            <div class="m-0"><a href="#"><img
                                                                           src="{{ asset('seller-assets/image/wallet/wallet_profile_dp.jpg')}}"
                                                                           alt="" class="  "></a></div>
                                                            <div class="m-0  use_for_marketing">
                                                                 <p>Seller Name</p>
                                                                 <span class="date_marketing">5 march, 18:33</span>
                                                            </div>
                                                       </div>
                                                       <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                                  </li>
                                                  <li class="d-flex justify-content-between align-items-center">
                                                       <div class="m-0 ms-2 use_single_box">
                                                            <div class="m-0"><a href="#"><img
                                                                           src="{{ asset('seller-assets/image/wallet/wallet_profile_dp.jpg')}}"
                                                                           alt="" class="  "></a></div>
                                                            <div class="m-0  use_for_marketing">
                                                                 <p>Seller Name</p>
                                                                 <span class="date_marketing">5 march, 18:33</span>
                                                            </div>
                                                       </div>
                                                       <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                                  </li>
                                                  <li class="d-flex justify-content-between align-items-center">
                                                       <div class="m-0 ms-2 use_single_box">
                                                            <div class="m-0"><a href="#"><img
                                                                           src="{{ asset('seller-assets/image/wallet/wallet_profile_dp.jpg')}}"
                                                                           alt="" class="  "></a></div>
                                                            <div class="m-0  use_for_marketing">
                                                                 <p>Seller Name</p>
                                                                 <span class="date_marketing">5 march, 18:33</span>
                                                            </div>
                                                       </div>
                                                       <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                                  </li>

                                             </ul>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="wallet_monthly">
                              <div class="w-100 m-0 me-1">
                                   <div class="w-100 m-0 py-2 d-flex align-items-start justify-content-between ">
                                        <p class="ms-2 title_box_wallet">Monthly Used</p>
                                        <p class="treedot_wallet text-end"><span class="text-end ">...</span></p>
                                   </div>
                                   <div>




                                        <div class='donut'>

                                             <div data-lcolor="#085f63">25.2</div>
                                             <div data-lcolor="#49beb7">25.6</div>
                                             <div data-lcolor="#facf5a">34.2</div>
                                             <div data-lcolor="#ff5959">30.2</div>


                                        </div>

                                   </div>
                                   <ul class="m-0 p-0 w-100 main_monthly_list">
                                        <li class="d-flex justify-content-between align-items-center">
                                             <div class="m-0 ms-2 use_single_box">
                                                  <div class="m-0"><a href="#"><img
                                                                 src="{{ asset('seller-assets/image/wallet/wallet_round_icon.png')}}" alt=""
                                                                 class="  "></a></div>
                                                  <div class="m-0  use_for_marketing">
                                                       <p>Use For Markentig</p>
                                                       <span class="date_marketing">5 march, 18:33</span>
                                                  </div>
                                             </div>
                                             <p class="ammount_monthly ammount_monthly_red">- 2,220</p>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                             <div class="m-0 ms-2 use_single_box">
                                                  <div class="m-0"><a href="#"><img
                                                                 src="{{ asset('seller-assets/image/wallet/wallet_round_icon.png')}}" alt=""
                                                                 class="  "></a></div>
                                                  <div class="m-0  use_for_marketing">
                                                       <p>Use For Markentig</p>
                                                       <span class="date_marketing">5 march, 18:33</span>
                                                  </div>
                                             </div>
                                             <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                             <div class="m-0 ms-2 use_single_box">
                                                  <div class="m-0"><a href="#"><img
                                                                 src="{{ asset('seller-assets/image/wallet/wallet_round_icon.png')}}" alt=""
                                                                 class="  "></a></div>
                                                  <div class="m-0  use_for_marketing">
                                                       <p>Use For Markentig</p>
                                                       <span class="date_marketing">5 march, 18:33</span>
                                                  </div>
                                             </div>
                                             <p class="ammount_monthly ammount_monthly_red">- 2,220</p>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                             <div class="m-0 ms-2 use_single_box">
                                                  <div class="m-0"><a href="#"><img
                                                                 src="{{ asset('seller-assets/image/wallet/wallet_round_icon.png')}}" alt=""
                                                                 class="  "></a></div>
                                                  <div class="m-0  use_for_marketing">
                                                       <p>Use For Markentig</p>
                                                       <span class="date_marketing">5 march, 18:33</span>
                                                  </div>
                                             </div>
                                             <p class="ammount_monthly ammount_monthly_red">- 2,220</p>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                             <div class="m-0 ms-2 use_single_box">
                                                  <div class="m-0"><a href="#"><img
                                                                 src="{{ asset('seller-assets/image/wallet/wallet_round_icon.png')}}" alt=""
                                                                 class="  "></a></div>
                                                  <div class="m-0  use_for_marketing">
                                                       <p>Use For Markentig</p>
                                                       <span class="date_marketing">5 march, 18:33</span>
                                                  </div>
                                             </div>
                                             <p class="ammount_monthly ammount_monthly_sky_blue">- 2,220</p>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                             <div class="m-0 ms-2 use_single_box">
                                                  <div class="m-0"><a href="#"><img
                                                                 src="{{ asset('seller-assets/image/wallet/wallet_round_icon.png')}}" alt=""
                                                                 class="  "></a></div>
                                                  <div class="m-0  use_for_marketing">
                                                       <p>Use For Markentig</p>
                                                       <span class="date_marketing">5 march, 18:33</span>
                                                  </div>
                                             </div>
                                             <p class="ammount_monthly ammount_monthly_red">- 2,220</p>
                                        </li>
                                   </ul>
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
                                   <div>
                                        <div class="main_add_money_to_wallet">
                                             <p>Add money to wallet</p>
                                             <ul class="outstanding_model_wallet">
                                                  <li>Outstanding balance: <span>Rs.40,000.0</span> </li>
                                                  <li>Wallet balance: <span>Rs.200.0</span> </li>
                                             </ul>
                                        </div>
                                        <p class="select_pie_chart_model_sub_title">Select Payment method</p>
                                        <div>
                                             <div>
                                                  <ul class="box_main_amout_model">
                                                       <li>Outstanding Amount
                                                       </li>
                                                       <li>Rezorpay</li>
                                                  </ul>
                                             </div>
                                        </div>
                                        <div class="amount_model_main">
                                             <p>Amount</p>
                                             <div class="amount_single_box_model">Rs.200.0</div>
                                        </div>
                                        <div class="main_pay_btn_model text-end me-3"><a href="#" class="">Play</a>
                                        </div>
                                   </div>

                              </div>


                         </div>
                    </div>
               </div>
@endsection

@section('extra-script')
<script src="{{ asset('seller-assets/js/wallet_pie_chart.js') }}"></script>
<script src="{{ asset('seller-assets/js/pie_chart_wallet_listtopie.min.js') }}"></script>

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
                "image": "{{ asset('seller-assets/image/dashborad_logo.png')}}') }}",
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


