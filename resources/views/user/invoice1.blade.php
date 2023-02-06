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
        width: 75px;
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
                    <tr>
                        <td class="main_table_td">
                            <table class="w-100 second-table">
                                <tr class="border_bottom_tr">
                                    <td>
                                        <div class=" delivery_box">
                                            <p class="mb-0">ORDER#:00051215453</p>
                                            <img src="seller-assets/image/qr_code.png" alt="">
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
                                            <li>Jax Tank</li>
                                            <li>Dust2</li>
                                            <p></p>
                                            <li>New Delhi</li>
                                            <li>Delhi,110002,india</li>
                                            <li class="mb-3">mobile no.:1234567890</li>
                                        </ul>
                                    </td>
                                    <td class="w-50">
                                        <h4 class="fw-normal ps-1">Shipped By (If undeliverd,return to)</h4>
                                        <ul>
                                            <li>smit</li>
                                            <li></li>
                                            <p>Uttar Pradesh</p>
                                            <li></li>
                                            <li>Gautam Buddha NAgar,Uttar Pradesh </li>
                                            <li>201351,India,Mobile No.:1234567890</li>

                                        </ul>
                                    </td>
                                </tr>
                                <tr class="delivery_box border_bottom_tr">
                                    <td>
                                        <ul>
                                            <li>SHIPMENT WEGHT:05 KG</li>
                                            <li>DIMENSIONS :100x50x10</li>
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
                                        <p>CASH ON DILIVERY</p>
                                        <p>COLLECT COD - Rs.400</p>
                                    </td>
                                    <td class="py-2">
                                        <div class="mb-2">
                                            <span>COURIER :Bluedart</span>
                                            <p class="mb-0">AWB # :123467898120</p>
                                            <img src="seller-assets/image/qr_code.png" alt="">
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
                                                <td colspan="">Delta</td>
                                                <td colspan="">delta 123</td>
                                                <td colspan="">10</td>
                                                <td>RS.10,000</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end"> TOTAL</td>
                                                <td>RS.10,000,00</td>
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
                        <td class="main_table_td">
                            <table class="w-100 second-table">
                                <tr class="border_bottom_tr">
                                    <td>
                                        <div class=" delivery_box">
                                            <p class="mb-0">ORDER#:00051215453</p>
                                            <img src="seller-assets/image/qr_code.png" alt="">
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
                                            <li>Jax Tank</li>
                                            <li>Dust2</li>
                                            <p></p>
                                            <li>New Delhi</li>
                                            <li>Delhi,110002,india</li>
                                            <li class="mb-3">mobile no.:1234567890</li>
                                        </ul>
                                    </td>
                                    <td class="w-50">
                                        <h4 class="fw-normal ps-1">Shipped By (If undeliverd,return to)</h4>
                                        <ul>
                                            <li>smit</li>
                                            <li></li>
                                            <p>Uttar Pradesh</p>
                                            <li></li>
                                            <li>Gautam Buddha NAgar,Uttar Pradesh </li>
                                            <li>201351,India,Mobile No.:1234567890</li>

                                        </ul>
                                    </td>
                                </tr>
                                <tr class="delivery_box border_bottom_tr">
                                    <td>
                                        <ul>
                                            <li>SHIPMENT WEGHT:05 KG</li>
                                            <li>DIMENSIONS :100x50x10</li>
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
                                        <p>CASH ON DILIVERY</p>
                                        <p>COLLECT COD - Rs.400</p>
                                    </td>
                                    <td class="py-2">
                                        <div class="mb-2">
                                            <span>COURIER :Bluedart</span>
                                            <p class="mb-0">AWB # :123467898120</p>
                                            <img src="seller-assets/image/qr_code.png" alt="">
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
                                                <td colspan="">Delta</td>
                                                <td colspan="">delta 123</td>
                                                <td colspan="">10</td>
                                                <td>RS.10,000</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end"> TOTAL</td>
                                                <td>RS.10,000,00</td>
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
                    </tr>
                    <tr>
                        <td class="main_table_td">
                            <table class="w-100 second-table">
                                <tr class="border_bottom_tr">
                                    <td>
                                        <div class=" delivery_box">
                                            <p class="mb-0">ORDER#:00051215453</p>
                                            <img src="seller-assets/image/qr_code.png" alt="">
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
                                            <li>Jax Tank</li>
                                            <li>Dust2</li>
                                            <p></p>
                                            <li>New Delhi</li>
                                            <li>Delhi,110002,india</li>
                                            <li class="mb-3">mobile no.:1234567890</li>
                                        </ul>
                                    </td>
                                    <td class="w-50">
                                        <h4 class="fw-normal ps-1">Shipped By (If undeliverd,return to)</h4>
                                        <ul>
                                            <li>smit</li>
                                            <li></li>
                                            <p>Uttar Pradesh</p>
                                            <li></li>
                                            <li>Gautam Buddha NAgar,Uttar Pradesh </li>
                                            <li>201351,India,Mobile No.:1234567890</li>

                                        </ul>
                                    </td>
                                </tr>
                                <tr class="delivery_box border_bottom_tr">
                                    <td>
                                        <ul>
                                            <li>SHIPMENT WEGHT:05 KG</li>
                                            <li>DIMENSIONS :100x50x10</li>
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
                                        <p>CASH ON DILIVERY</p>
                                        <p>COLLECT COD - Rs.400</p>
                                    </td>
                                    <td class="py-2">
                                        <div class="mb-2">
                                            <span>COURIER :Bluedart</span>
                                            <p class="mb-0">AWB # :123467898120</p>
                                            <img src="seller-assets/image/qr_code.png" alt="">
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
                                                <td colspan="">Delta</td>
                                                <td colspan="">delta 123</td>
                                                <td colspan="">10</td>
                                                <td>RS.10,000</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end"> TOTAL</td>
                                                <td>RS.10,000,00</td>
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
                        <td class="main_table_td">
                            <table class="w-100 second-table">
                                <tr class="border_bottom_tr">
                                    <td>
                                        <div class=" delivery_box">
                                            <p class="mb-0">ORDER#:00051215453</p>
                                            <img src="data:image/png;base64,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"
                                                alt="">
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
                                            <li>Jax Tank</li>
                                            <li>Dust2</li>
                                            <p></p>
                                            <li>New Delhi</li>
                                            <li>Delhi,110002,india</li>
                                            <li class="mb-3">mobile no.:1234567890</li>
                                        </ul>
                                    </td>
                                    <td class="w-50">
                                        <h4 class="fw-normal ps-1">Shipped By (If undeliverd,return to)</h4>
                                        <ul>
                                            <li>smit</li>
                                            <li></li>
                                            <p>Uttar Pradesh</p>
                                            <li></li>
                                            <li>Gautam Buddha NAgar,Uttar Pradesh </li>
                                            <li>201351,India,Mobile No.:1234567890</li>

                                        </ul>
                                    </td>
                                </tr>
                                <tr class="delivery_box border_bottom_tr">
                                    <td>
                                        <ul>
                                            <li>SHIPMENT WEGHT:05 KG</li>
                                            <li>DIMENSIONS :100x50x10</li>
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
                                        <p>CASH ON DILIVERY</p>
                                        <p>COLLECT COD - Rs.400</p>
                                    </td>
                                    <td class="py-2">
                                        <div class="mb-2">
                                            <span>COURIER :Bluedart</span>
                                            <p class="mb-0">AWB # :123467898120</p>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJQAAAA7CAIAAAASFDS4AAADmUlEQVR4nO2cvUvrUBiH37RXjSIqBqwdig5uiuDUv6CC0gwOVTqKjk4iRQcVBCEgVFcpuvuFiIOo+IFGp1oQRRDBVCumCCJtaSMIzR1yb7jko9Ze0L7wPlNy8ju/c9KH0EwBtSR8Pp/P59MO9BHLgH7J9xfLQXOPudC8tF1n8Q3mzZinfLpJu5i589+A3aLFw6iqCl+HYRgAUFWVYf406AeGgH5JG7EbNIxbFurj+tKWc7/UYN6Mecqnm7SLGX4H/fTf1c2LFo+jhDlEmUDyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEEPyEPOrtGl7e3t2B+ZT7dgyYBgsptAuAADhcHh/f393d7dAgyiKgiB0dXWZq+w28+km7WIF7qLwrCIp8Uu338nMzEw2m/34+Jidna2uri6QPDk5WVxcXFpaYln2fzJYKPHJ+05CoRDLsqenp9vb2/39/QDw8PCwublZW1vLcVxfXx8ASJK0tbXldrtbW1sB4OjoKJvN+v1+ABBF8e3tjed5QwYALi4uRFFkWTYYDNbV1Vk2lzWlfZr6m0kkEmNjY1dXV9rp4OCgJEnX19c8z6uqen9/Pzw8HI/Hj4+PPR6PoiiRSCQSiTw+Pkaj0Wg0OjExYc6oqrq+vi5JUiwWGx0dtWwucxA8eQBwc3PjdDpvb287OjoAwOFwLC8vu1yuoaEhANjY2JiamvJ4PC0tLT09PQAQCATm5+dXVlZkWfZ6vQMDA+ZMPp9/fn4+OztzOByvr6/aQobmMgfH22Z3d7cgCOfn5wCQy+UCgUAoFPL7/QcHB4lEguM4WZa15NPTEwDU19enUqmXlxeWZWOxWGdnpzmzurra1tYWDoenp6crKiosm3/mboum3J+8VColCEJTU9Pd3Z32H/b+/j45Odnb21tTU6MoSnNzczAYHBkZOTw8lGU5nU4vLCyMj4+7XK7Kysr29va1tTWGYcwZnufn5uYuLy/T6XQ8Ht/Z2fF6vYbmn777T0DwtqmqajKZbGxsrKqqAoB8Pp/JZJxOZyaTcbvdeiyZTDY0NBR+hzRkFEXJ5XIcx2mnds1lCwJ5hB2/AViJlTjxGzFrAAAAAElFTkSuQmCC"
                                                alt="">
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
                                                <td colspan="">Delta</td>
                                                <td colspan="">delta 123</td>
                                                <td colspan="">10</td>
                                                <td>RS.10,000</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end"> TOTAL</td>
                                                <td>RS.10,000,00</td>
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
                    </tr>
                </table>
            </div>


        </div>

        <!-- Main Table End -->

</body>

</html>
