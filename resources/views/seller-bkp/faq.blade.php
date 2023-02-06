@extends('seller.layouts.master')

@section('extra-css')
<!-- FAQ CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/faq.css') }}">
@endsection
@section('content')



<div class="">
    <div class="d-flex text-start align-items-center justify-content-md-center justify-content-lg-start">
        <h2 class="fequently_text text-center ">Fequently asked questions</h2>
    </div>

    <div class="mb-5">
        <section id="faq-main">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 px-0">
                        <ul class="m-0 p-0">
                            <li class="beefup drop-down-fa">
                                <h5 class="beefup-head">How to Listing Product?</h5>
                                <div class="beefup-body">
                                    <div class="mockup">Offending belonging promotion provision an be oh consulted
                                        ourselves it. Blessing welcomed ladyship she met humoured sir breeding her.
                                    </div>
                                </div>
                            </li>
                            <li class="beefup drop-down-fa">
                                <h5 class="beefup-head">How to Process Order System?</h5>
                                <div class="beefup-body">
                                    <div class="mockup">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Consequatur animi
                                        consectetur nulla, impedit quis aut eveniet accusamus hic aspernatur amet
                                        laborum quasi inventore!
                                        Voluptate vitae temporibus, a ut provident corporis!</div>
                                </div>
                            </li>
                            <li class="beefup drop-down-fa">
                                <h5 class="beefup-head">What Is Product Q/A System?</h5>
                                <div class="beefup-body">
                                    <div class="mockup">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Consequatur animi
                                        consectetur nulla, impedit quis aut eveniet accusamus hic aspernatur amet
                                        laborum quasi inventore!
                                        Voluptate vitae temporibus, a ut provident corporis!</div>
                                </div>
                            </li>
                            <li class="beefup drop-down-fa">
                                <h5 class="beefup-head">What is Payment System of seller?</h5>
                                <div class="beefup-body">
                                    <div class="mockup">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Consequatur animi
                                        consectetur nulla, impedit quis aut eveniet accusamus hic aspernatur amet
                                        laborum quasi inventore!
                                        Voluptate vitae temporibus, a ut provident corporis!</div>
                                </div>
                            </li>
                            <li class="beefup drop-down-fa">
                                <h5 class="beefup-head">How to create camping Ad’s?</h5>
                                <div class="beefup-body">
                                    <div class="mockup">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Consequatur animi
                                        consectetur nulla, impedit quis aut eveniet accusamus hic aspernatur amet
                                        laborum quasi inventore!
                                        Voluptate vitae temporibus, a ut provident corporis!</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
<!-- Toggle JS -->

@section('extra-script')
<script src="{{ asset('seller-assets/js/faq.js') }}"></script>

<script>
    // model js
          $(document).ready(function () {
               //Popover Js
               var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
               var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                    return new bootstrap.Popover(popoverTriggerEl)
               })
          });

</script>
<script>
    $(function () {
            $('.drop-down-fa').beefup();
        });
</script>

@endsection
