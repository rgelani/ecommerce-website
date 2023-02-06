@foreach($sellers as $seller)
<div class="seller_approval_box col-xl-6 col-lg-12 col-md-12 mt-4">
    <div class=" seller_single_box mx-2">
        <div class="d-flex justify-content-end">
            <label class="checkbox bounce">
                <input type="checkbox" id="seller_un_hold" value="{{ $seller->id }}" class="seller_un_hold"
                    name="seller_un_hold" />
                <svg viewBox="0 0 21 21">
                    <polyline points="5 10.75 8.5 14.25 16 6">
                    </polyline>
                </svg>
            </label>
        </div>
        <div class="d-flex  justify-content-between">
            <ul class="seller_box_part_left px-0 mb-0">
                <li>
                    <span>Seller_id:-{{$seller['id']}}</span>
                </li>
                <li>
                    <span>Seller Name:-</span>
                    <div class="d-inline">{{$seller['first_name'].''.$seller['last_name']}}</div>
                </li>

                <li>
                    <span>Seller Phone No.:-</span>
                    <div class="d-inline">{{$seller['phone_number']}}</div>
                </li>
                <li>
                    <span>Seller Email Address.:-</span>
                    <div class="d-inline">{{$seller['email']}}</div>
                </li>

            </ul>
            <ul class="seller_box_part_left px-0 mb-0 me-5">
                <li>
                    <span>Seller Company’s Name:</span>
                    <div class="d-inline">{{$seller['company_name']}}</div>
                </li>

                <li>
                    <span> Seller State:-</span>
                    <div class="d-inline">{{ $seller->state->name }}</div>
                </li>
                <li>
                    <span> Seller City:-</span>
                    <div class="d-inline">{{ $seller->city->name }}</div>
                </li>
            </ul>
        </div>

        <div class="d-flex profile_main_photo_seller ">
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


            <ul class="d-flex align-items-end mb-4 ps-0 mb-0">
                <div>

                    <a href="#"
                        class="seller_approval_bnt deactive_unhold_seller mb-0 d-flex  align-items-center text-dark justify-content-center single_un_hold_seller"
                        data-id="{{ $seller->id }}">Unhold Seller</a>

                </div>
            </ul>
        </div>
    </div>
</div>
@endforeach

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
            class="seller_approval_bnt deactive_unhold_seller mb-0 d-flex  align-items-center text-dark justify-content-center multiple_un_hold_seller"
            data-id="{{ $seller->id }}">Unhold Seller</a>
    </div>
</div>
<!-- end right coreber button -->
@endif
