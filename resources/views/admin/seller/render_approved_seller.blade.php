@foreach($sellers as $seller)
<div class="seller_approval_box col-xl-6 col-lg-12 col-md-12 mt-4">
                                                       <div class=" seller_single_box mx-2">
                                                            <div class="d-flex justify-content-end">
                                                                 <label class="checkbox bounce">
                                                                      <input type="checkbox" />
                                                                      <svg viewBox="0 0 21 21">
                                                                           <polyline points="5 10.75 8.5 14.25 16 6">
                                                                           </polyline>
                                                                      </svg>
                                                                 </label>
                                                            </div>
                                                            <div class="d-flex ">
                                                                 <ul class="seller_box_part_left px-0 mb-0">
                                                                      <li>
                                                                           <span>Seller_id:-</span>
                                                                           <div class="d-inline">{{ $seller->id }}</div>
                                                                      </li>
                                                                      <li>
                                                                           <span>Seller Name:-</span>
                                                                           <div class="d-inline">{{ $seller->first_name }} {{ $seller->last_name }}</div>
                                                                      </li>
                                                                      <li class="d-flex">
                                                                           <p class="pick_up_seller">Pickup Address:-
                                                                           </p>
                                                                           <div class="d-inline" style="width: 175%;">
                                                                                {{ $seller->pickup_address }}
                                                                           </div>
                                                                      </li>
                                                                      <li>
                                                                           <span>Seller Phone No.:-</span>
                                                                           <div class="d-inline">{{ $seller->phone_number }}</div>
                                                                      </li>
                                                                      <li>
                                                                           <span>Seller Email Address.:-</span>
                                                                           <div class="d-inline">{{ $seller->email }}</div>
                                                                      </li>

                                                                 </ul>
                                                                 <ul class="seller_box_part_left px-0 mb-0">
                                                                      <li>
                                                                           <span>Seller Compny’s Name:</span>
                                                                           <div class="d-inline">{{ $seller->company_name }}</div>
                                                                      </li>
                                                                      <li>
                                                                           <span> Seller State:-</span>
                                                                           <div class="d-inline">{{ $seller->state_name }}</div>
                                                                      </li>
                                                                      <li>
                                                                           <span> IFSC Code:-</span>
                                                                           <div class="d-inline">{{ $seller->ifsc_code }}</div>
                                                                      </li>
                                                                      <li>
                                                                           <span> Bank Account No:-</span>
                                                                           <div class="d-inline">{{ $seller->bank_account_number }}</div>
                                                                      </li>
                                                                      <li>
                                                                           <span> GST No:-</span>
                                                                           <div class="d-inline">{{ $seller->gst_number }}</div>
                                                                      </li>
                                                                 </ul>
                                                            </div>

                                                            <div class="d-flex profile_main_photo_seller">
                                                                 <ul
                                                                      class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
                                                                      Profile Photo</ul>
                                                                 <ul
                                                                      class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
                                                                      GST Certificate</ul>
                                                                 <ul
                                                                      class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
                                                                      PAN Certificate</ul>

                                                                 <ul class="d-flex align-items-center ps-0 mb-0">
                                                                      <div>
                                                                           <a href="#"
                                                                                class="seller_approval_bnt mb-0 d-flex align-items-center justify-content-center  mb-3">Approve
                                                                                Seller</a>
                                                                           <a href="#"
                                                                                class="seller_approval_bnt deactive_seller mb-0 d-flex align-items-center justify-content-center">Deactivate
                                                                                Seller</a>

                                                                      </div>
                                                                 </ul>
                                                            </div>
                                                       </div>

                                                  </div>                 
@endforeach