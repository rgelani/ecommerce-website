@extends('seller.layouts.master')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('seller-assets/css/faq.css') }}">
@endsection
@section('content')

               <div class="main_content_lg">
                   
                 <div class="">
                     <div class="d-flex btn_faq_s_btn_main justify-content-between align-items-center">
                         <h2 class="fequently_text text-center " >Fequently asked questions</h2>
                         <div>
                              <a href="how_its_work.html">Faq's</a>
                         </div>
                         <span></span>  
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
                                        <div class="mockup">Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. </div>
                                      </div>
                                    </li>
                                    <li class="beefup drop-down-fa">
                                      <h5 class="beefup-head">How to Process Order System?</h5>
                                      <div class="beefup-body">
                                        <div class="mockup">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur animi
                                          consectetur nulla, impedit quis aut eveniet accusamus hic aspernatur amet laborum quasi inventore!
                                          Voluptate vitae temporibus, a ut provident corporis!</div>
                                      </div>
                                    </li>
                                    <li class="beefup drop-down-fa">
                                      <h5 class="beefup-head">What Is Product Q/A System?</h5>
                                      <div class="beefup-body">
                                        <div class="mockup">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur animi
                                          consectetur nulla, impedit quis aut eveniet accusamus hic aspernatur amet laborum quasi inventore!
                                          Voluptate vitae temporibus, a ut provident corporis!</div>
                                      </div>
                                    </li>
                                    <li class="beefup drop-down-fa">
                                      <h5 class="beefup-head">What is Payment System of seller?</h5>
                                      <div class="beefup-body">
                                        <div class="mockup">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur animi
                                          consectetur nulla, impedit quis aut eveniet accusamus hic aspernatur amet laborum quasi inventore!
                                          Voluptate vitae temporibus, a ut provident corporis!</div>
                                      </div>
                                    </li>
                                    <li class="beefup drop-down-fa">
                                      <h5 class="beefup-head">How to create camping Ad’s?</h5>
                                      <div class="beefup-body">
                                        <div class="mockup">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur animi
                                          consectetur nulla, impedit quis aut eveniet accusamus hic aspernatur amet laborum quasi inventore!
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
                                                  <img src="assets/image/image_bluk/profile_pic_model.png"
                                                       class="profile_img_round" alt="">
                                             </div>
                                             <div class="text-center my-3">
                                                  <h4 class="text-dark">DoNotDisturb</h4>
                                                  <p class="text-dark py-2">Lorem ipsum dolor sit amet.</p>

                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class=" text-center">
                                   <a class="logout" href="#">Logout</a>
                              </div>

                         </div>
                    </div>
               </div>

               <!--End profile Model -->

@endsection
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
