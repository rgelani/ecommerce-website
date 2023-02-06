@extends('admin.layouts.master')
@section('extra-css')
<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<!--start rating section -->
<div class="product_view_rating">
                              <!-- strat product listing main -->

                              <!-- Start seller profile -->
                              <div class="seller_profile_main">
                                   <!-- strat product section-1 -->
                                   <div class="product_section_main px-2">
                                        <div class="d-flex ps-3">
                                             <div class="dropdown dropdown_single_product me-2">
                                                  <div class="multiSelect">
                                                       <select multiple="true" class="multiSelect_field" id="multi_state" data-placeholder="State">
                                                       @foreach($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                       @endforeach
                                                       </select>
                                                     </div>
                                                     <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                       <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                                         <g stroke-linecap="round" stroke-linejoin="round">
                                                             <line x1="18" y1="6" x2="6" y2="18"></line>
                                                             <line x1="6" y1="6" x2="18" y2="18"></line>
                                                         </g>
                                                       </symbol>
                                                     </svg>
                                             </div>
                                             <div class="dropdown dropdown_single_product me-2">
                                                  <div class="multiSelect">
                                                       <select multiple="multiple" id="multi_city" class="multiSelect_field" data-placeholder="District">
                                                       @foreach($cities as $city)
                                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                       @endforeach
                                                       </select>
                                                  </div>
                                                     <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                       <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                                         <g stroke-linecap="round" stroke-linejoin="round">
                                                             <line x1="18" y1="6" x2="6" y2="18"></line>
                                                             <line x1="6" y1="6" x2="18" y2="18"></line>
                                                         </g>
                                                       </symbol>
                                                     </svg>
                                             </div>
                                             <div class="dropdown dropdown_single_product me-2">
                                                  <div class="multiSelect">
                                                       <button id="filter_seller" class="seller_approval_bnt deactive_seller">Filter</button>
                                                  </div>
                                                     <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                       <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                                         <g stroke-linecap="round" stroke-linejoin="round">
                                                             <line x1="18" y1="6" x2="6" y2="18"></line>
                                                             <line x1="6" y1="6" x2="18" y2="18"></line>
                                                         </g>
                                                       </symbol>
                                                     </svg>
                                             </div>
                                        </div>
                                        <!-- start seller box -->
                                             <div class="saller_main  row">

                                             </div>
                                        <!-- end seller box -->
                                   </div>
                                   <!-- end product section-1 -->
                              </div>
                              <!-- End profile -->
                              <!-- strat right corener button -->
                              <div
                                   class="pagination_and_button d-flex justify-content-between mt-5  align-items-center">
                                   <nav aria-label="Page navigation example w-50 mb-0">
                                        <ul class="pagination_navigation custom-pagination pagination-secondary pagination align-items-stretch">
                                             <li class="page-item" id="pagination_button" style="display: none"><a class="page-link" aria-label="Previous"><span aria-hidden="true" class="page_value" id=""></span></a></li>
                                        </ul> 
                                   </nav>
                                   <div class="d-flex">
                                        <a href="{{ route('admin.seller.un-hold-seller') }}"
                                             class="seller_approval_bnt deactive_unhold_seller mb-0 d-flex  align-items-center text-dark justify-content-center">Unhold Seller</a>

                                   </div>
                              </div>
                              <!-- end right coreber button -->
                         </div>
                         <!--end rating section -->
@endsection
@section('extra-js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {

// $(".multiSelect_field").select2();

     getSellers("{{ route('admin.seller.render_sellers') }}", state, city);

     function getSellers(seller_url, state, city) {
          $.ajax({
               url: seller_url,
               data : {
                    hold : true,
                    syaye : state,
                    city : city
               },
               type: "GET",
               success: function(response) {
                    $('.saller_main').html('');
                    $('.saller_main').html(response[0]);
                    var links = response[1];
                    $('.clone_page').remove();
                    var paginationButton = $('#pagination_button').clone(true).removeAttr('id').addClass('clone_page');
                    paginationButton.find('.page_value').attr('id', links["prev"]);
                    paginationButton.find('.page_value').text('Prev');
                    paginationButton.show();
                    paginationButton.appendTo('.pagination_navigation');
                    $.each(links.links, function(index, value) {
                         var paginationButton = $('#pagination_button').clone(true).removeAttr('id').addClass('clone_page');
                         paginationButton.find('.page_value').attr('id', value[1]);
                         paginationButton.find('.page_value').text(value[0]);
                         if(links['active'] == value[1]) {
                              paginationButton.addClass('active');
                         }
                         paginationButton.show();
                         paginationButton.appendTo('.pagination_navigation');
                    })
                    var paginationButton = $('#pagination_button').clone(true).removeAttr('id').addClass('clone_page');
                    paginationButton.find('.page_value').attr('id', links["next"]);
                    paginationButton.find('.page_value').text('Next');
                    paginationButton.show();
                    paginationButton.appendTo('.pagination_navigation');
               }
          })
     }

     $(document).find('.page-item').click(function() {
          if($(this).find('.page_value').attr('id') != '#') {
               city = $('#multi_city').val();
               state = $('#multi_state').val();
               getSellers($(this).find('.page_value').attr('id'), state, city);
          }
     });

     $(document).find('#filter_seller').click(function() {
          city = $('#multi_city').val();
          state = $('#multi_state').val();
          getSellers("{{ route('admin.seller.render_sellers') }}", state, city);
     });
});
</script>
@endsection
