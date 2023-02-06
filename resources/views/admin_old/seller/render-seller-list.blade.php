@foreach ($sellers as $seller)

<div class="seller_approval_box col-xl-6 col-lg-12 col-md-12 mt-4">
    <div class=" seller_single_box mx-2">
        <div class="d-flex justify-content-end">
            <label class="checkbox bounce">
                <input type="checkbox" id="seller_approval" value="{{ $seller->id }}" class="seller_approval"
                    name="seller_approval" />
                <svg viewBox="0 0 21 21">
                    <polyline points="5 10.75 8.5 14.25 16 6">
                    </polyline>
                </svg>
            </label>
        </div>
        <div class="d-flex ">
            <ul class="seller_box_part_left px-0 mb-0">
                <li>
                    <span>Seller_id:-{{ $seller->id }}</span>
                    <div class="d-inline"></div>
                </li>
                <li>
                    <span>Seller Name:-</span>
                    <div class="d-inline">{{ $seller->first_name}} {{ $seller->last_name}}</div>
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
                    <div class="d-inline">{{ $seller->state->name }}</div>
                </li>
                <li>
                    <span> Seller City:-</span>
                    <div class="d-inline">{{ $seller->city->name }}</div>
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
            <ul class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
                <img src="{{ asset('uploads/'.$seller->pan_certificate) }}" alt="" srcset=""
                    class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
            </ul>
            <ul class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
                <img src="{{ asset('uploads/'.$seller->gst_certificate) }}" alt="" srcset=""
                    class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
            </ul>
            <ul class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
                <img src="{{ asset('uploads/'.$seller->cancel_cheque) }}" alt="" srcset=""
                    class="profile_photo_seller d-flex align-items-center ps-0 justify-content-center">
            </ul>

            <ul class="d-flex align-items-center ps-0 mb-0">
                <div>
                    <a href="javascript:;"
                        class="seller_approval_bnt mb-0 d-flex align-items-center justify-content-center active_seller_single mb-3 "
                        data-id="{{ $seller->id }}" data-status="1">Approve
                        Seller</a>
                    <a href="javascript:;"
                        class="seller_approval_bnt deactive_seller active_seller_single mb-0 d-flex align-items-center justify-content-center"
                        data-id="{{ $seller->id }}" data-status="2">Deactivate
                        Seller</a>
                </div>
            </ul>
        </div>
    </div>
</div>
@endforeach

<!-- strat right corener button -->

@if($sellers->isNotEmpty())
<div class="pagination_and_button d-flex justify-content-between mt-5  align-items-center">
    <nav aria-label="Page navigation example w-50 mb-0">
        <ul class="custom-pagination pagination-secondary pagination align-items-stretch">
            <li class="page-item">
                <a class="page-link {{ $sellers->previousPageUrl() ? '' : 'disabled' }}"
                    href="{{  $sellers->previousPageUrl()  }}" aria-label="Previous">
                    <span aria-hidden="true">Prev</span>
                </a>
            </li>
            {{-- <li class="page-item"><span class="page-link">1</span></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li> --}}
            <li class="page-item">
                <a class="page-link {{ $sellers->nextPageUrl() ? '' : 'disabled' }}"
                    href="{{ $sellers->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="d-flex">
        <a href="javascript:;"
            class="seller_approval_bnt mb-0 d-flex align-items-center justify-content-center  text-dark mb-3 me-4 active_seller"
            data-status="1">Approve
            Seller</a>
        <a href="javascript:;"
            class="seller_approval_bnt deactive_seller mb-0 d-flex align-items-center text-dark justify-content-center active_seller"
            data-status="2">Deactivate
            Seller</a>
    </div>
</div>
<!-- end right coreber button -->
@endif
