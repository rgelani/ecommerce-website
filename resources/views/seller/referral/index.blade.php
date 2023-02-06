@extends('seller.layouts.master')

@section('extra-css')

    <!-- media css -->
    <link rel="stylesheet" href="{{ asset('seller-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('seller-assets/css/reffrel.css')}}">

    <style>
        .error-display {
            color: #FC0909;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
@endsection

@section('content')
<div class="main_content_lg">
                <div class="common_content_pad_block">
                
                    <div>
                        <div>
                            <div>
                                <ul class=" card_main_reffrel">
                                    <li class="bg_box_reffrel reffrel_comn_card">
                                        <div>
                                            <p>Total Reffrel</p>
                                            <span>167</span>
                                        </div>
                                    </li>
                                    <li class="bg_box_reffrel_2 reffrel_comn_card">
                                        <div>
                                            <p>Reffrel bounce </p>
                                            <span>Rs.1000.00</span>
                                        </div>
                                    </li>
                                    <li class="reffrel_code">
                                        <div>
                                            <p>Reffrel bounce </p>
                                            <span>Rs.1000.00</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="friend_main_reffrel">
                            <div class="reffrel_left_side">
                                <div class="reffrel_a_friend_get_main">
                                    <div class=" reffrel_a_friend_get">
                                        <p class="reffrel_friend_title">Refer a Friend & get 1000 Rs Bonus</p>
                                        <div class="image_main_reffrel">
                                            <img src="{{asset('seller-assets/image/reffrel/reffrel_a_friend.png')}}"
                                                class="image_reffrel_friend img-fluid">
                                        </div>
                                    </div>
                                    <div class="text-center send_invitation" > Send Invitations
                                    </div>
                                    <div class="link_main_copy_btn">
                                        <a href="#"
                                            class="text-center link_copy">htpps://www.ikart.com/refer/xyz1234345623</a>
                                        <button class="copy_btn">Copy</button>
                                    </div>
                                </div>
                            </div>
                            <div class="reffrel_bonus_history mb-5">
                                <div class="">
                                    <h2 class="reffrel_bonus_history_title text-black">Reffrel&nbsp;Bonus&nbsp;history
                                    </h2>
                                </div>
                                <div >
                                    <div class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                                        <div class="d-flex">
                                            <div class="round_reffrel_bonus_history">
                                                <img src="{{asset('seller-assets/image/reffrel/Deposit_from_tstanding.png')}}" alt="">
                                            </div>
                                            <div class="deposit_reffrel_single_entry">
                                                <p>Deposit from Outstanding</p>
                                                <span>5 march, 18:33</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="price_reffrel">- 1,470</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                                        <div class="d-flex">
                                            <div class="round_reffrel_bonus_history bg_deposit_ui">
                                                <img src="{{asset('seller-assets/image/reffrel/Deposit_UPI.png')}}" alt="">
                                            </div>
                                            <div class="deposit_reffrel_single_entry">
                                                <p>Deposit from Outstanding</p>
                                                <span>5 march, 18:33</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="price_reffrel">- 1,470</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                                        <div class="d-flex">
                                            <div class="round_reffrel_bonus_history bg_deposit_ui">
                                                <img src="{{asset('seller-assets/image/reffrel/Deposit_from_Card.png')}}" alt="">
                                            </div>
                                            <div class="deposit_reffrel_single_entry">
                                                <p>Deposit from Outstanding</p>
                                                <span>5 march, 18:33</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="price_reffrel">- 1,470</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                                        <div class="d-flex">
                                            <div class="round_reffrel_bonus_history cancelled_bg">
                                                <img src="{{asset('seller-assets/image/reffrel/Cancelled.png')}}" alt="">
                                            </div>
                                            <div class="deposit_reffrel_single_entry">
                                                <p>Deposit from Outstanding</p>
                                                <span>5 march, 18:33</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="price_reffrel">- 1,470</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap px-2 py-2 pb-4">
                                        <div class="d-flex">
                                            <div class="round_reffrel_bonus_history cancelled_bg">
                                                <img src="{{asset('seller-assets/image/reffrel/Use_For_Markentig.png')}}" alt="">
                                            </div>
                                            <div class="deposit_reffrel_single_entry">
                                                <p>Deposit from Outstanding</p>
                                                <span>5 march, 18:33</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="price_reffrel">- 1,470</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="bg_main_box">
                                    <ul class="d-flex justify-content-between align-items-center px-3 pt-3">
                                        <li class="text-dark pb-3 fs-4">Transaction</li>
                                        <li >
                                             <a href="#"> <img src="{{asset('seller-assets/image/reffrel/three_dote_reffrel.png')}}" alt="" class="img-fluid"> </a> 
                                        </li>
                                    </ul>
                                    <ul class="d-flex transaction_header">
                                        <li>Sr no.</li>
                                        <li>Name</li>
                                        <li>Bounce</li>
                                        <li>Date</li>
                                    </ul>
                                   <div class="main_transaction_table">
                                  
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">1</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">2</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">3</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">4</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">5</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">6</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">7</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">1</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">1</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">1</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">1</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">1</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">1</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                    <ul class="transaction_rows_reffrel">
                                        <li class="counting_number_reffrel">1</li>
                                        <li>Lucas Wells</li>
                                        <li>$680</li>
                                        <li>01-10-2018</li>
                                    </ul>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
@endsection

@section('extra-script')
<script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>    
    <script src="{{ asset('seller-assets/js/custom.js') }}"></script>
@endsection
