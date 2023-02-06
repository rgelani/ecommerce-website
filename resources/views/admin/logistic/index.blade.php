@extends('admin.layouts.master')

@section('content')

    <!--strat dashbord product view -->
        <!--===============================================================================
                                     start logistic payment
        =============================================================================== -->

        <div class="product_view">
            <!-- Pandding Payment -->
            <div class="single_pro_listing d-flex justify-content-between">
                <ul class="d-flex px-0">
                    <a class="fs-7 single_product_title  border_title border_title_logistic " href="{{ route('admin.logistic.panding-payment') }}">
                        Pandding Payment
                    </a>
                    <a class="fs-7 d-inline single_product_title text-dark border_title_logistic" href="{{ route('admin.logistic.completed-payment') }}">
                        Compeleted Payment</a>
                </ul>
            </div>

            <!--start search boxend prduct count -->

            <div class="search_box_2 position-relative">
                <select class="bgc">
                    <option value="Search your Category" selected>Search by Logistic-comapny</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Home">Home</option>
                    <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                    <option value="Men's Grooming">Men's Grooming</option>
                    <option value="Nutrition & Health Care">Nutrition & Health Care</option>
                    <option value="Toys & School Supplies">Toys & School Supplies</option>
                    <option value="Sports & Fitness">Sports & Fitness</option>
                    <option value="Books & Music">Books & Music</option>
                    <option value="Stationery & Office Supplies">Stationery & Office Supplies
                    </option>
                    <option value="Auto Accessories">Auto Accessories</option>
                    <option value="  Safety & Hygiene Essentials"> Safety & Hygiene Essentials
                    </option>
                    <option value="  Orgenics">Orgenics</option>
                </select>

                <!-- <img src="image/dropdown_icon.png" alt="" class=""> -->

            </div>

            <!--start search boxend prduct count -->

            <!--start product_aprove_main -->
            <div class="product_approval logistric_mb">
                <div class="logistric_main p-0  d-inline">
                    <ul class="d-flex  approval_heading mb-0 p-0 align-content-center ">
                        <li class="d-inline logistic_sr_no">Sr. No.</li>
                        <li class="d-inline logistic_sheet_id">Excel Sheet_Id</li>
                        <li class="d-inline shipment_date">Shipment date</li>
                        <li class="d-inline logistic_no_order">No.Of orders</li>

                        <li class="d-inline logistic_shiping_charges">Shipping charges</li>
                        <li class="d-inline logistic_total">Total amount</li>
                        <li class="d-inline logistic_collection">collection Amount</li>
                        <li class="d-inline logistic_last_payment">Last payment Date</li>
                        <li class="d-inline logistic_blank_box"> &nbsp; </li>
                        <li class="d-inline logistic_sku_id">SKU_Id</li>
                        <li class="d-inline logistic_product_id">Product_ID</li>
                        <li class="list_single_check logistic_check d-flex justify-content-center align-items-center">
                            <label class="checkbox bounce">
                                <input type="checkbox" id="check_box" />
                                <svg viewBox="0 0 21 21">
                                    <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                </svg>
                            </label>
                        </li>
                    </ul>
                    <div class="scrollbar scroll_aproova" id="style-2">
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">1</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">2</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">3</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">4</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">5</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">6</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">7</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">8</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">9</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">10</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="d-flex approoval_list text-dark p-0 align-content-center ">
                            <li class="d-inline logistic_sr_no approval_no">11</li>
                            <li class="d-inline logistic_sheet_id">Apple Watch Series 5</li>
                            <li class="d-inline shipment_date">DD/MM/YYYY</li>
                            <li class="d-inline logistic_no_order">40000 </li>

                            <li class="d-inline logistic_shiping_charges">₹550000</li>
                            <li class="d-inline logistic_total">₹2500000</li>
                            <li class="d-inline logistic_collection">₹1950000</li>
                            <li class="d-inline logistic_last_payment">DD/MM/YYYY</li>
                            <li class="d-inline logistic_blank_box"> &nbsp; </li>
                            <li class="d-inline logistic_sku_id">10020</li>
                            <li class="d-inline logistic_product_id">10020</li>
                            <li class="list_single_check d-flex justify-content-center align-items-center">
                                <label class="checkbox bounce">
                                    <input type="checkbox" class="checkbox" />
                                    <svg viewBox="0 0 21 21">
                                        <polyline points="5 10.75 8.5 14.25 16 6">
                                        </polyline>
                                    </svg>
                                </label>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <!--start product_aprove_main -->

            <!-- strat right coreber button -->

            <!-- end right coreber button -->

        </div>
    <!--===============================================================================
                                end logistic payment
            =============================================================================== -->


@endsection

@section('extra-js')
@endsection
