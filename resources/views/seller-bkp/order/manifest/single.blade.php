<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Slip</title>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap');

    /* defaul css */
    * {
        margin: 0;
        padding: 0;
        font-size: 8px;
        /* box-sizing: border-box; */
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* Custom class */

    /* Custom CSS */

    .border_bottom_tr {
        border-bottom: #000 2px solid;
    }

    .border_bottom_tr_red {
        border-bottom: #974242 2px solid;
    }

    .border_bottom_tr_red_top {
        border-top: #974242 2px solid;
    }

    .conditions_info {
        padding-left: 15px;
        list-style: decimal;
    }

    /*
    .page_A4_table {
        height: 297mm;
        width: 210mm;
        color: #000;
        border: 2px solid #000;
        display: grid;
        align-content: space-between;
    } */

    /* .table_main {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    } */



    .Shipped_by {
        display: contents;
    }


    /* SKU TAble */
    #sku_table tr td {
        border: 1.5px solid #974242;
        padding: 3px;
        font-size: 8px;
    }

    .heading_sku {
        background-color: #e4cecd;
        text-transform: uppercase;
        font-weight: bold;
    }

    .dashboard_wrap {
        display: flex;
        align-items: baseline;
        justify-content: center;
    }

    .main_conditions {
        font-size: 8px;
    }

    /*
    .conditions_title {
        font-weight: 500;
    } */

    .lable_auto_genreted_text {
        text-transform: uppercase;
        padding: 3px;
        padding-bottom: 6px;
    }

    .second-table td,
    .second-table th {
        width: 73px;
    }

    .second-table td,
    .second-table th {
        font-size: 8px;
        border-bottom: 1px solid black;
    }

    .main_table_td {
        border: 2px solid black;
    }
</style>

<body class="product_view_page">
    <div class="main_wrapper dashboard_wrap">
        <!-- Main Table Start -->
        <div class="">

            <div class="table_main">
                <table class="main_table">
                    @foreach ($data['lineItems'] as $key => $lineItem)
                    @if($key % 2 == 0) <tr> @endif
                        <td class="main_table_td">
                            <table class="w-100 second-table">
                                <tr class="border_bottom_tr">
                                    <td>
                                        <div class=" delivery_box">
                                            {{-- <p class="mb-0">ORDER#:{{ $lineItem->order->id }}</p> --}}
                                            <img src="{{ $lineItem->barcode  }}" alt="" height=60px>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=" delivery_box">
                                            <img src="seller-assets/image/logo.png" alt=""
                                                style="width:60px;height: 60px; margin-left: 30px">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50">
                                        <h4 class="fw-normal ps-1">DELIVER To:</h4>
                                        <ul class="">
                                            <p>{{ @$lineItem->order->address->name ?? ''}}</p>
                                            <li>{{ @$lineItem->order->address->address1 ?? ''}}</li>
                                            <li>{{ @$lineItem->order->address->address2 ?? ''}}</li>
                                            <li>{{ @$lineItem->order->address->city->name ?? ''}}</li>
                                            <li>{{ @$lineItem->order->address->state->name ?? ''}},india,{{
                                                @$lineItem->order->address->pin_code ?? ''}}</li>
                                            <li class="mb-3">mobile no.:{{ @$lineItem->order->address->phone_no ??
                                                ''}}
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="w-50">
                                        <h4 class="fw-normal ps-1">Shipped By (If undeliverd,return to)</h4>
                                        <ul>
                                            <p>{{ @$lineItem->seller->first_name ?? ''}} {{
                                                @$lineItem->seller->last_name?? '' }}
                                            </p>
                                            <p>{{ @$lineItem->seller->pickup_address ?? ''}}</p>
                                            <li>{{ @$lineItem->seller->city->name?? ''}}</li>
                                            <li>{{ @$lineItem->seller->state->name?? ''}},india,{{
                                                @$lineItem->seller->pin_code?? '' }}</li>


                                        </ul>
                                    </td>
                                </tr>
                                <tr class="delivery_box border_bottom_tr">
                                    <td>
                                        <ul>
                                            <li>SHIPMENT WEGHT:{{ $lineItem->product->weight }} G</li>
                                            <li>DIMENSIONS :{{ $lineItem->product->height }}*{{
                                                $lineItem->product->width }}*{{ $lineItem->product->length }}</li>
                                        </ul>
                                    </td>
                                    <td class="d-grid pt-1">
                                        <div class="">
                                            <p><span>ROUTING CODE :</span><span
                                                    style="font-weight: bold;">DEL/IPC</span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="delivery_box">
                                    <td class="">
                                        <p>{{ $lineItem->order->payment_mode == 0 ? 'COD' : 'prepaid' }}</p>
                                        <p>{{ $lineItem->order->payment_mode == 0 ?
                                            "COLLECT COD - Rs.".$lineItem->selling_price :''}}</p>
                                    </td>
                                    <td class="py-2">
                                        <div class="">
                                            <span>COURIER :Delivary</span>
                                            <img src="{{ $lineItem->oid_barcode }}" alt="" height=60px width="228px">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <table class="  second-table" id="sku_table">
                                            <tr class="heading_sku">
                                                <td>sku</td>
                                                <td>ITEM</td>
                                                <td>QTY</td>
                                                <td>PRICE</td>
                                            </tr>
                                            <tr>
                                                <td colspan="">{{ $lineItem->sku }}</td>
                                                <td colspan="">{{ $lineItem->title }}</td>
                                                <td colspan="">{{ $lineItem->quantity }}</td>
                                                <td>RS.{{ $lineItem->selling_price*$lineItem->quantity }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end"> TOTAL</td>
                                                <td>RS.{{ $lineItem->selling_price*$lineItem->quantity }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <ul>
                                            <p class="fs-5 conditions_title mb-1">TERMS AND CONDITIONS:</p>
                                            <li class="ps-2">Visit official website of Bluedart to view the
                                                Conditions
                                                of Carriage.</li>
                                            <li class="ps-2 pb-1">Shiping charges are indusive of service
                                                tax and all
                                                figures are in
                                                IND.</li>
                                        </ul>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <li>All disputes are subject to Pradesh jurisdiction.Goods
                                            once sold will only
                                            be taken back or excharged as per the store's exchange/return policy.</li>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        this is an auot-Genrerated lable and does not need singnature.
                                    </td>
                                </tr>
                            </table>
                        </td>

                        @if($key % 2 != 0)
                    </tr>@endif

                    @endforeach
                </table>
            </div>


        </div>

        <!-- Main Table End -->

</body>

</html>
