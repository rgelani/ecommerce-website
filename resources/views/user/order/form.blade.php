@extends('user.layouts.master')
@section('extra-css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .dropdown_single_product {
        width: calc(50% - 20px) !important;
        margin: 10px !important;
        /* padding: 16px 20px !important; */
        font-weight: 400 !important;
        font-size: 20px !important;
        line-height: 24px !important;
        color: rgb(0 0 0 / 60%) !important;
        /* border: 1px solid !important */
    }

    .select2-container--default {
        width: calc(100%) !important;
        margin: 0px !important;
        padding: 0 !important;
        line-height: 50px !important;
        color: rgb(0 0 0 / 60%) !important;
        /* padding: 16px 20px !important; */
    }
</style>


@endsection

@section('content')



<!-- Start Min Cart -->
<section class="main-min-cart">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 accordion main-accordion-form col-lg-12" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false`" aria-controls="collapseOne">
                            <div class="accordion-number-box">1</div>
                            <h2>LOGIN</h2>
                            <div class="chack-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"
                                    fill="none">
                                    <path
                                        d="M6.17091 15.5459H6.15327C5.88749 15.5406 5.63482 15.4278 5.45394 15.233L1.20716 10.6695V10.6691C0.838841 10.2725 0.861808 9.65188 1.25885 9.28317C1.65547 8.91444 2.27604 8.9374 2.64476 9.33444L6.19957 13.1547L18.3671 0.984012C18.7547 0.637424 19.3458 0.653837 19.7132 1.02175C20.0807 1.38925 20.0976 1.97988 19.751 2.36744L6.86417 15.2584C6.68041 15.4422 6.43145 15.5456 6.17181 15.546L6.17091 15.5459Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div class="change-btn">
                                <a href="#" class="btn">Change</a>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by
                            default, until the collapse plugin adds the appropriate classes that we use to
                            style each element. These classes control the overall appearance, as well as the
                            showing and hiding via CSS transitions. You can modify any of this with custom
                            CSS or overriding our default variables. It's also worth noting that just about
                            any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="accordion-number-box">2</div>
                            <h2>DELIVERY ADDRESS</h2>
                            <div class="chack-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"
                                    fill="none">
                                    <path
                                        d="M6.17091 15.5459H6.15327C5.88749 15.5406 5.63482 15.4278 5.45394 15.233L1.20716 10.6695V10.6691C0.838841 10.2725 0.861808 9.65188 1.25885 9.28317C1.65547 8.91444 2.27604 8.9374 2.64476 9.33444L6.19957 13.1547L18.3671 0.984012C18.7547 0.637424 19.3458 0.653837 19.7132 1.02175C20.0807 1.38925 20.0976 1.97988 19.751 2.36744L6.86417 15.2584C6.68041 15.4422 6.43145 15.5456 6.17181 15.546L6.17091 15.5459Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div class="change-btn">
                                <a href="#" class="btn">Change</a>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form id="address-save">
                                @csrf
                                {{-- <div class="add-address-chack">
                                    <input type="checkbox">
                                    <label>ADD A NEW ADDRESS</label>
                                </div> --}}
                                <div class="form-main-content">
                                    <div class="current-location-btn">
                                        <a href="#" class="btn">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="30"
                                                    viewBox="0 0 19 30" fill="none">
                                                    <path
                                                        d="M14.7579 23.3081C14.389 23.1805 14.1922 22.7779 14.319 22.4079C14.4466 22.0381 14.8491 21.8422 15.2191 21.969C16.2562 22.3277 17.1116 22.789 17.7117 23.32C18.3771 23.9097 18.7488 24.5937 18.7488 25.3411C18.7488 26.627 17.6343 27.733 15.8333 28.4813C14.2204 29.1512 12.0092 29.5659 9.58207 29.5659C7.15466 29.5659 4.94351 29.1512 3.3308 28.4813C1.52952 27.7321 0.415314 26.6261 0.415314 25.3411C0.415314 24.5939 0.78709 23.9108 1.45242 23.32C2.05148 22.789 2.90706 22.3286 3.945 21.969C4.31396 21.8413 4.71738 22.0379 4.84517 22.4079C4.97278 22.7777 4.77627 23.1803 4.40623 23.3081C3.54527 23.6062 2.85281 23.9725 2.3918 24.3816C2.03671 24.6966 1.83738 25.0235 1.83738 25.3414C1.83738 25.9963 2.61647 26.6478 3.87521 27.1714C5.32331 27.7733 7.33973 28.1451 9.58239 28.1451C11.825 28.1451 13.8416 27.7733 15.2896 27.1714C16.5483 26.6478 17.3274 25.9965 17.3274 25.3414C17.3274 25.0235 17.1289 24.6966 16.773 24.3816C16.3117 23.9725 15.6195 23.6064 14.7586 23.3081H14.7579ZM9.58185 24.5575C12.4956 18.6079 18.9801 15.6456 18.9801 9.39715C18.9801 4.207 14.7721 0 9.58185 0C4.39171 0 0.183594 4.207 0.183594 9.39715C0.183594 15.6468 6.66504 18.6024 9.58185 24.5575ZM13.8233 9.39715C13.8233 11.7396 11.9243 13.6386 9.58185 13.6386C7.23941 13.6386 5.34041 11.7396 5.34041 9.39715C5.34041 7.05471 7.23936 5.1557 9.58185 5.1557C11.9243 5.1557 13.8233 7.05466 13.8233 9.39715Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                            <span>Use my current location</span>
                                        </a>
                                    </div>
                                    <div class="form-main-input">
                                        <input type="text" placeholder="Name" name="name" value="{{ @$address->name }}">
                                        <input type="text" placeholder="10-digit mobile number" name="phone_no"
                                            value="{{ @$address->phone_no }}">
                                        <input type="text" placeholder="Pincode" name="pin_code"
                                            value="{{ @$address->pin_code ?? $pincode->pin }}">
                                        <input type="text" placeholder="Locality" name="address2"
                                            value="{{ @$address->address2 }}">

                                        <textarea id="" cols="30" rows="10" name="address1"
                                            placeholder="Address (Area and Street)">{{ @$address->address1 }}</textarea>
                                        <div class="dropdown dropdown_single_product me-2">
                                            <div class="multiSelect">
                                                <select class="multiSelect_field state" data-placeholder="State"
                                                    name="state_id" id="states">
                                                    @if(!@$address->state_id)
                                                    <option class="dropdown-item" value="">select state
                                                    </option>
                                                    @endif
                                                    @foreach($states as $state)
                                                    <option class="dropdown-item" @if (@$address->state_id ===
                                                        $state->id)
                                                        selected @endif value="{{$state->id}}">
                                                        {{$state->name}}</option>
                                                    @endforeach
                                                    <div class="category_select_arrow">
                                                        <img>
                                                    </div>
                                                </select>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    id="iconX">
                                                    <g stroke-linecap="round" stroke-linejoin="round">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </g>
                                                </symbol>
                                            </svg>
                                        </div>
                                        <div class="dropdown dropdown_single_product me-2">
                                            <div class="multiSelect">
                                                <select class="multiSelect_field city" data-placeholder="City"
                                                    name="city_id" id="cities" data-city="{{ $cities  }}">
                                                    @foreach($cities->where('state_id',@$address->state_id ) as $citie)
                                                    <option class="dropdown-item" @if (@$address->city_id == $citie->id)
                                                        selected @endif value="{{$citie->id}}">
                                                        {{$citie->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    id="iconX">
                                                    <g stroke-linecap="round" stroke-linejoin="round">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </g>
                                                </symbol>
                                            </svg>
                                        </div>
                                        {{-- <input type="text" placeholder="City/District/Town"> --}}

                                        <input type="text" placeholder="Landmark (optional)" name="address3"
                                            value="{{ @$address->address3 }}">
                                        <input type="text" placeholder="Alternate Phone (Optional)"
                                            name="alternate_phone_no" value="{{ @$address->alternate_phone_no }}">
                                    </div>
                                    <div class="home-work-input">
                                        <h6>Address Type</h6>
                                        <div class="home-work-inner">
                                            <div class="home-work-check">
                                                <input type="radio" name="type" value="0" @if(@$address->type == 0)
                                                checked @endif>
                                                <label>Home (All day delivery)</label>
                                            </div>
                                            <div class="home-work-check">
                                                <input type="radio" name="type" value="1" @if(@$address->type == 1)
                                                checked @endif>
                                                <label>Work (Delivery between 10 AM - 5 PM)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-main-btn">
                                        <button type="submit" class="btn">SAVE AND DELIVER HERE</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="accordion-number-box">3</div>
                            <h2>ORDER SUMMARY</h2>
                            <div class="chack-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"
                                    fill="none">
                                    <path
                                        d="M6.17091 15.5459H6.15327C5.88749 15.5406 5.63482 15.4278 5.45394 15.233L1.20716 10.6695V10.6691C0.838841 10.2725 0.861808 9.65188 1.25885 9.28317C1.65547 8.91444 2.27604 8.9374 2.64476 9.33444L6.19957 13.1547L18.3671 0.984012C18.7547 0.637424 19.3458 0.653837 19.7132 1.02175C20.0807 1.38925 20.0976 1.97988 19.751 2.36744L6.86417 15.2584C6.68041 15.4422 6.43145 15.5456 6.17181 15.546L6.17091 15.5459Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div class="change-btn">
                                <a href="#" class="btn">Change</a>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class=" col-sm-12 min-cart-left-col min-cart-accordian">
                                <div class="main-title-code d-flex border-bottom align-items-center custum_padding">
                                    <div class="col">
                                        <h4>My Cart ({{ $line_items->sum('quantity') }})</h4>
                                    </div>
                                    <div class="col col d-flex justify-content-end modal-dialog-centered ">
                                        <a href="#" class="btn border">Enter
                                            Delivery Pincode</a>
                                    </div>
                                </div>
                                @foreach ($line_items as $line_item)
                                <div>
                                    <div class="main-cart-item row ">
                                        <div class="cart-item-left-col">
                                            <div class="cart-item-image">
                                                <img src="{{asset('storage/product/'.$line_item['image']) }}"
                                                    alt="Min Cart Items">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="min-cart-content row">
                                                <div class="col-6">
                                                    <h5>{{ $line_item['title'] ??'' }}</h5>
                                                    {{-- <h6>{{ $line_item->variants }} --}}
                                                    </h6>
                                                    <h6>{{ $line_item['discription'] }}</h6>
                                                </div>
                                                <div class="col-6 min-cart-content">
                                                    <div
                                                        class="d-flex delivery-details align-items-center justify-content-start">
                                                        {{-- <span class="delivery-date">Delivery by Sun May 15 |</span>
                                                        --}}
                                                        {{-- <span class="free-delivery">Free</span> --}}
                                                        {{-- <strike class="delivery-charg ">$40</strike> --}}
                                                    </div>
                                                    <p>7 Days Replacement policy</p>
                                                </div>
                                                <div class="pri-inner d-flex align-items-center">
                                                    <span class="rel-pri">&#x20b9;{{ $line_item['selling_price']
                                                        }}</span>
                                                    <del class="delete-pri">&#x20b9;{{ $line_item['MRP'] }}</del>
                                                    <span class="pri-offer">23% Off</span>
                                                    <span class="applied-affer">3 offers applied</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quantity-box-content d-flex align-items-center custum_padding">
                                        <div class="quantity-box d-flex align-items-center">
                                            <div class="plus">+</div>
                                            <input type="text" value="{{ $line_item['quantity'] }}">
                                            <div class="minus">-</div>
                                        </div>
                                        <a href="#" class="save-for-later">SAVE FOR LATER</a>
                                        <a href="#" class="remove">REMOVE</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('user.order-create') }}" class="btn">cod</a>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <div class="accordion-number-box">4</div>
                            <h2>PAYMENT OPTIONS</h2>
                            <div class="chack-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                     viewBox="0 0 20 16" fill="none">
                                    <path
                                        d="M6.17091 15.5459H6.15327C5.88749 15.5406 5.63482 15.4278 5.45394 15.233L1.20716 10.6695V10.6691C0.838841 10.2725 0.861808 9.65188 1.25885 9.28317C1.65547 8.91444 2.27604 8.9374 2.64476 9.33444L6.19957 13.1547L18.3671 0.984012C18.7547 0.637424 19.3458 0.653837 19.7132 1.02175C20.0807 1.38925 20.0976 1.97988 19.751 2.36744L6.86417 15.2584C6.68041 15.4422 6.43145 15.5456 6.17181 15.546L6.17091 15.5459Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div class="change-btn">
                                <a href="#" class="btn">Change</a>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body patment-options-content">
                            <ul class="patment-options-inner">
                                <li class="patment-options-chack">
                                    <input type="radio" name="patment-options" class="upi_background">
                                    <label class="">UPI
                                        <div class="upi-payment-content">
                                            <h4>Choose an option</h4>
                                            <ul class="upi-payment-option">
                                                <li class="upi-patment-chack">
                                                    <input type="radio" name="upi-patment-options">
                                                    <label>PhonePe
                                                        <a href="#" class="btn phonepe-btn">CONTINUE</a>
                                                    </label>
                                                </li>
                                                <li class="upi-patment-chack">
                                                    <input type="radio" name="upi-patment-options">
                                                    <label>Your UPI ID
                                                        <div class="upi-id-content">
                                                            <div class="upi-id-inner">
                                                                <input type="text" placeholder="Enter UPI id">
                                                                <!-- <label>Enter UPI ID</label> -->
                                                                <button class=" ">VERIFY</button>
                                                            </div>
                                                            <a href="#" class="btn upi-id-btn">PAY $10,000</a>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </label>
                                </li>
                                <li class="patment-options-chack">
                                    <input type="radio" name="patment-options">
                                    <label>Wallets</label>
                                </li>
                                <li class="patment-options-chack">
                                    <input type="radio" name="patment-options">
                                    <label>Credit / Debit / ATM Card</label>
                                </li>
                                <li class="patment-options-chack">
                                    <input type="radio" name="patment-options">
                                    <label>Net Banking
                                        <a href="#" class="btn phonepe-btn">CONTINUE</a>
                                    </label>
                                </li>
                                <li class="patment-options-chack">
                                    <input type="radio" name="patment-options">
                                    <label>EMI (Easy Installments)</label>
                                </li>
                                <li class="patment-options-chack">
                                    <input type="radio" name="patment-options">
                                    <label>Cash on Delivery
                                        <div class="cash-on-delivery">
                                            <div class="cash-on-delivery-inner">
                                                <h5>315</h5>
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                         height="21" viewBox="0 0 18 21" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M8.75 4.5C7.31609 4.5 5.91438 4.92521 4.72212 5.72185C3.52986 6.51849 2.60061 7.65078 2.05188 8.97554C1.50314 10.3003 1.35957 11.758 1.63931 13.1644C1.91905 14.5708 2.60955 15.8626 3.62348 16.8765C4.63741 17.8905 5.92924 18.5809 7.3356 18.8607C8.74196 19.1404 10.1997 18.9969 11.5245 18.4481C12.8492 17.8994 13.9815 16.9701 14.7782 15.7779C15.5748 14.5856 16 13.1839 16 11.75C16 11.3358 16.3358 11 16.75 11C17.1642 11 17.5 11.3358 17.5 11.75C17.5 13.4806 16.9868 15.1723 16.0254 16.6112C15.0639 18.0502 13.6973 19.1717 12.0985 19.8339C10.4996 20.4962 8.7403 20.6695 7.04296 20.3319C5.34563 19.9942 3.78653 19.1609 2.56282 17.9372C1.33911 16.7135 0.505752 15.1544 0.168131 13.457C-0.169489 11.7597 0.00379021 10.0004 0.666057 8.40152C1.32832 6.80267 2.44983 5.4361 3.88877 4.47464C5.3277 3.51318 7.01942 3 8.75 3C9.16422 3 9.5 3.33579 9.5 3.75C9.5 4.16421 9.16422 4.5 8.75 4.5Z"
                                                              fill="#3B903F" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M6.21967 0.21967C6.51256 -0.0732232 6.98744 -0.0732232 7.28033 0.21967L9.92678 2.86612C10.4149 3.35427 10.4149 4.14573 9.92678 4.63388L7.28033 7.28033C6.98744 7.57322 6.51256 7.57322 6.21967 7.28033C5.92678 6.98744 5.92678 6.51256 6.21967 6.21967L8.68934 3.75L6.21967 1.28033C5.92678 0.987437 5.92678 0.512563 6.21967 0.21967Z"
                                                              fill="#3B903F" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="upi-id-inner cash-delivery-inner">
                                                <input type="text" placeholder="Enter the characters">
                                                <!-- <label>Enter the characters</label> -->
                                            </div>
                                            <a href="#" class="btn upi-id-btn">CONFIRM ORDER</a>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 min-cart-right-col col-lg-12 pb-4">
                <div class="cart-inner">
                    <div class="main-title-code d-flex border-bottom align-items-center">
                        <div class="col">
                            <h4>PRICE DETAILS</h4>
                        </div>
                    </div>
                    <div class="main-cart-right">
                        <div class="cart-right-pri">
                            <h6>Price (1 items)</h6>
                            <span>$12,500</span>
                        </div>
                        <div class="cart-right-pri">
                            <h6>Discount</h6>
                            <span>-$2,500</span>
                        </div>
                        <div class="cart-right-pri">
                            <h6>Delivery Charges</h6>
                            <span>Free</span>
                        </div>
                        <div class="cart-total-pri">
                            <h6>Total Amount</h6>
                            <span>$10,000</span>
                        </div>
                        <p>You will save $2,500 on this order</p>
                    </div>
                </div>
                <div class="safe-secure-payments d-flex align-items-center">
                    <div class="payment-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="46" viewBox="0 0 40 46" fill="none">
                            <path
                                d="M27.0685 18.6972C27.5503 19.179 27.5503 19.9353 27.0685 20.4172L18.3308 29.1549C18.1245 29.3612 17.7804 29.499 17.5054 29.499H17.299C17.0927 29.4303 16.8863 29.3612 16.6799 29.1549L12.965 25.4399C12.4832 24.9581 12.4832 24.2018 12.965 23.7199C13.4468 23.2381 14.2032 23.2381 14.685 23.7199L17.5059 26.5408L25.3491 18.6977C25.8304 18.2154 26.5872 18.2154 27.0686 18.6972L27.0685 18.6972ZM39.934 17.1144V17.3894V17.4581L39.8654 23.7189V23.7876C39.8654 24.5444 39.8654 25.1634 39.7968 25.8517C39.659 28.9475 38.5586 31.9062 36.3568 34.8643C33.88 38.2356 30.5086 40.9875 26.0369 43.3956C24.661 44.0838 23.2851 44.7029 21.9086 45.322C21.5645 45.4597 21.2204 45.597 20.9455 45.7347C20.6014 45.8724 20.2573 45.9411 19.9137 45.9411C19.6387 45.9411 19.3632 45.8724 19.0882 45.8033C13.5156 43.7392 9.18096 40.9875 5.6723 37.4783C2.92056 34.7266 1.26913 31.768 0.512332 28.6034C0.168236 27.2275 0.0305006 25.8517 0.0305006 24.5444C-0.0381258 20.7603 0.0305006 16.9762 0.0305006 13.2612V9.27085C0.0305006 7.68859 0.718695 6.93179 2.30089 6.86262C7.66726 6.51853 12.7585 4.52356 18.4 0.670907C19.7073 -0.223636 20.2577 -0.223636 21.6336 0.670907C25.899 3.62904 29.6831 5.4182 33.6735 6.31272C34.7053 6.51908 35.7376 6.65681 36.8385 6.79455C37.1826 6.86318 37.5954 6.86318 37.9394 6.93228C39.5907 7.13865 39.9344 8.2396 39.9344 9.13412V15.395L39.934 17.1144ZM37.5263 14.9131V8.99633C37.1822 8.92771 36.9072 8.92771 36.5631 8.8586C35.4622 8.72087 34.2927 8.58361 33.1231 8.30814C28.8577 7.34497 24.6609 5.41856 20.1888 2.3227C20.1202 2.25407 20.0511 2.18497 19.9825 2.18497C19.9138 2.25359 19.8447 2.3227 19.7761 2.3227C13.7216 6.45092 8.21801 8.58359 2.4386 8.99626V12.9866V24.2698C2.4386 25.4393 2.57633 26.6088 2.85132 27.8475C3.4704 30.5992 4.98398 33.1452 7.39221 35.6219C10.6258 38.9242 14.754 41.4702 19.9137 43.3964H19.9824C20.3265 43.2587 20.6706 43.1214 20.9455 42.9837C22.2529 42.4332 23.6287 41.8142 24.8674 41.195C28.9956 38.9932 32.0914 36.4477 34.3618 33.4206C36.2195 30.8751 37.1827 28.3293 37.32 25.7151C37.32 25.096 37.3886 24.477 37.3886 23.7202V23.5138L37.4572 17.3907V17.322V14.9129L37.5263 14.9131Z"
                                fill="black" />
                        </svg>
                    </div>
                    <p>Safe and Secure Payments. Easy returns. 100% Authentic products.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Min Cart -->


@endsection

@section('extra-js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function () {
            $(".multiSelect_field").select2();
        });

        $('.state').change(function (e) {
            e.preventDefault();
            var state = $(this).val();
            var citiesDb  = $(cities).data('city');
            $('.city').html('');
            var stateCity = (citiesDb.filter( function( cities ){ return ( cities.state_id  == state);}))
            $.each(stateCity, function (indexInArray, valueOfElement) {
                $('.city').append(`<option class='dropdown-item state-${state}' value=${valueOfElement.id}>${valueOfElement.name}</option>`);
            });
        });

        $('#address-save').submit(function (e) {
            e.preventDefault();
            $(`.error`).hide();

            $.ajax({
                type: "post",
                url: "{{ route('user.address-save') }}",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.success) {
                        console.log(response);
                        $('.enter-pin-close-btn-click').click();
                    } else {

                    }

                },error: function (error) {
                    if (error.status == 422) {
                        $.each(error.responseJSON.errors, function (indexInArray, valueOfElement) {
                            $(`#${indexInArray}-error`).html(valueOfElement).show();
                        });
                    }

                }
            });
        });
</script>
@endsection
