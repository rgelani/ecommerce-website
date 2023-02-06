<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Invoice</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

    <!-- style create new camping  -->
    <!-- <link rel="stylesheet" href="assets/css/tax_invoice.css"> -->
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap');
    /* defaul css */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    .fw-bold {
        font-weight: bold;
    }

    body {
        font-size: 8px;
        font-family: roboto;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* Custom class */

    .tax_invoice_main {
        /* width: 594mm;
        height: 420mm; */
        /* border: 1px solid #000; */
        justify-content: center;
        display: flex;
        font-size: 0.8rem;
    }

    .logo_invoice {
        /* display: flex;
                justify-content: center; */
        /* padding-bottom: 12px; */
    }

    .logo_invoice img {
        /* width: 100px; */
    }

    .tax_invoice_main_title {
        border-bottom: 1px solid #000;
        border-top: 1px solid #000;
        text-transform: uppercase;
    }

    .table_invoice {
        /* width: calc(100% - 50px); */
        margin: 0 25px;
        display: flex;
        justify-content: space-around;
    }

    .table_invoice div {
        width: 30%
    }

    .table_invoice .border_middle {
        border-left: 1px #000 dashed;
        border-right: 1px #000 dashed;
        padding: 0 15px;
    }

    td,
    th {
        padding-right: 10px 0px;
    }

    /* .invoice_no_manage>span {
        width: 250px;
    } */

    /* .invoice_no_manage>p {
        margin-bottom: 0;
        max-width: 450px;
    } */

    /* .invoice_no_manage:last-child {
        width: 300px;
    } */

    .border_bottom_top_tr {
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        padding: 15px 0;
        margin: 35px 0;
    }

    pre span {
        width: 150px;
    }

    tr {
        font-size: 8px
    }

    /* .d-flex {
        display: flex;
        /* justify-content: space-between; */
</style>

<body class="">


    <!-- Main Table Start -->
    @foreach ($data as $allData)

    <div class="tax_invoice_main">
        <div class="w-100">
            <!-- logo -->
            <div class="logo_invoice pt-5">
                <img src="{{ public_path('seller-assets/image/logo.png') }}" class="" alt="" width="80px" height="80px"
                    style="  display: block;
                        margin-left: 40%;
                        margin-right: auto;">
            </div>

            <div class="">
                <h1 class="text-center tax_invoice_main_title py-2">Tax Invoice</h1>
            </div>
            <div class="table_invoice">

                <div class="w-100b " style="float: left">
                    <p class="fw-bold">
                        <span class="mt-3 pt-1">SHIPPING ADDRESS:</span>
                    </p>
                    <ul>
                        <li>{{ $allData['address1']['address1'] }} </li>
                        <li>{{ $allData['address1']['address2'] }} </li>
                        <li>{{ $allData['address1']['address3'] }} </li>
                        <li>{{ $allData['address1']['city_id'] }} {{ $allData['address1']['pin_code'] }}</li>
                        <li>{{ $allData['address1']['state_id'] }}</li>
                        <li>{{ $allData['address1']['country_id'] }} {{ $allData['address1']['pin_code'] }}</li>
                        {{--
                        <li>Gujarat</li>
                        <li>India</li> --}}
                        <li>State Code:24</li>
                    </ul>
                </div>

                <div class="w-100 " style="float: left;">
                    <p class="fw-bold ">SOLD BY: </p>
                    <ul style=" text-align: right;" class="border_middle">
                        <li>{{ $allData['address2']['address1'] }} </li>
                        <li>{{ $allData['address2']['address2'] }} </li>
                        <li>{{ $allData['address2']['address3'] }} </li>
                        <li>{{ $allData['address2']['city_id'] }} {{ $allData['address2']['pin_code'] }}</li>
                        <li>{{ $allData['address2']['state_id'] }}</li>
                        <li>{{ $allData['address2']['country_id'] }} {{ $allData['address2']['pin_code'] }}</li>
                        {{--
                        <li>Gujarat</li>
                        <li>India</li> --}}
                        <li>State Code:24</li>
                        <li>PH.{{ $allData['address2']['phone_no'] }}</li>
                        <li>GSTN No.</li>
                        <li>Email:smitghori.97@gmail.com</li>
                    </ul>
                </div>
                <div class=" w-100 ms-3n " style="float:left;padding: 0 15px;">

                    <ul>
                        <p class="fw-bold">INVOICE DETAILS:</p>
                        <li>Invoice no: Retails0005</li>
                        <li>Invoice Date.: 22/05/2022</li>
                        <li>ORDER NO.: 224</li>
                        <li> ORDER Date.: 24/05/2022</li>
                        <li>CHANNEL.: Ikartsmit</li>
                        <li>SHIPPED BY.:</li>
                        <li>AWN.:</li>
                        <li>PAYMENT.:</li>
                        <li>METHOD.:Prepaid</li>
                    </ul>

                </div>

            </div>
            <div style="margin-top: 160px">
                <table class="w-100 border-bottom-0 border_bottom_top_tr">
                    <tr class="">
                        <th class="mt-5 py-4">S.NO.</th>
                        <th class="mt-5 py-4" style="width: 200px">PRODUCT NAME</th>
                        <th class="mt-5 py-4">HSN</th>
                        <th class="mt-5 py-4">QTY</th>
                        <th class="mt-5 py-4">UNIT PRICE</th>
                        <th class="mt-5 py-4">UNIT DISCOUNT</th>
                        <th class="mt-5 py-4">TAXABLE VALUE</th>
                        <th class="mt-5 py-4">CGST (Value | %)</th>
                        <th class="mt-5 py-4">SGST (Value | %)</th>
                        <th class="mt-5 py-4">TOTAL (Including GST)</th>
                    </tr>
                    <tr class="pb-4 mb-4">
                        <td>1</td>
                        <td style="width: 200px; text-align: center;">
                            <p class="">KUNAI</p>
                            <span>SKU : chakra123</span>
                        </td>
                        <td class="">441122</td>
                        <td class="">10</td>
                        <td class="">Rs. 900.00</td>
                        <td class="">0.00</td>
                        <td class="">9000.00</td>
                        <td class="">0.00 | 0.00</td>
                        <td class="">0.00 | 0.00</td>
                        <td class="">9000.00</td>
                    </tr>
                </table>
            </div>
            <p style="text-align: right">NET TOTAL (In Value) <span>RS.90000.00</span></li>
                <hr>
        </div>

    </div>
    @endforeach





</body>

</html>
