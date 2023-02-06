@extends('seller.layouts.master')


@section('extra-css')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/singleProduct_listing.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/image_bulk_upload.css')}}">
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6">
        <div class="single_product_listing image_bluck_listing">
            <div class="common_title">
                <h2 class="text-start">Upload Your Photos</h2>
            </div>

            <div class="photo_upload">
                <div class="photo_img_left">
                    <ul>
                        <li>
                            <div class="photo_upload_section">
                                <div class="upload_file">
                                    <div class="plus_img">
                                        <img src="{{asset('seller-assets/image/single_product_listing/plus.png')}}"
                                            alt="plus">
                                    </div>
                                    <p class="extraction">Not vaild Extraction</p>
                                    <div class="previewImgs">
                                        <img class="previewImg" src="s.png" alt="image">
                                    </div>
                                    <input type="file" size="60" name="photo" class="preview_img">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="photo_upload_section">
                                <div class="upload_file">
                                    <div class="plus_img">
                                        <img src="{{asset('seller-assets/image/single_product_listing/plus.png')}}"
                                            alt="plus">
                                    </div>
                                    <p class="extraction">Not vaild Extraction</p>
                                    <div class="previewImgs">
                                        <img class="previewImg" src="s.png" alt="image">
                                    </div>
                                    <input type="file" size="60" name="photo" class="preview_img">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="photo_upload_section">
                                <div class="upload_file">
                                    <div class="plus_img">
                                        <img src="{{asset('seller-assets/image/single_product_listing/plus.png')}}"
                                            alt="plus">
                                    </div>
                                    <p class="extraction">Not vaild Extraction</p>
                                    <div class="previewImgs">
                                        <img class="previewImg" src="s.png" alt="image">
                                    </div>
                                    <input type="file" size="60" name="photo" class="preview_img">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="photo_upload_section">
                                <div class="upload_file">
                                    <div class="plus_img">
                                        <img src="{{asset('seller-assets/image/single_product_listing/plus.png')}}"
                                            alt="plus">
                                    </div>
                                    <p class="extraction">Not vaild Extraction</p>
                                    <div class="previewImgs">
                                        <img class="previewImg" src="s.png" alt="image">
                                    </div>
                                    <input type="file" size="60" name="photo" class="preview_img">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="photo_upload_section">
                                <div class="upload_file">
                                    <div class="plus_img">
                                        <img src="{{asset('seller-assets/image/single_product_listing/plus.png')}}"
                                            alt="plus">
                                    </div>
                                    <p class="extraction">Not vaild Extraction</p>
                                    <div class="previewImgs">
                                        <img class="previewImg" src="s.png" alt="image">
                                    </div>
                                    <input type="file" size="60" name="photo" class="preview_img">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="photo_upload_section">
                                <div class="upload_file">
                                    <div class="plus_img">
                                        <img src="{{asset('seller-assets/image/single_product_listing/video.png')}}"
                                            alt="plus">
                                    </div>
                                    <p class="extraction">Not vaild Extraction</p>
                                    <div class="previewImgs">
                                        <img class="previewImg" src="s.png" alt="image">
                                    </div>
                                    <input type="file" size="60" name="photo" class="preview_img">
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="main_product_img">
                        <div class="photo_upload_section main_produt_info">
                            <div class="upload_file">
                                <div class="plus_img">
                                    <img src="{{asset('seller-assets/image/single_product_listing/big_upload.png')}}"
                                        alt="plus">
                                </div>
                                <p class="extraction">Not vaild Extraction</p>
                                <div class="previewImgs">
                                    <img class="previewImg" src="s.png" alt="image">
                                </div>
                                <input type="file" size="60" name="photo" class="preview_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="col-xl-6">
        <div class="bluk_imges">
            <div class="row">
                <div class="image_bluck_col">
                    <div class="image_bluck" data-bs-toggle="modal"
                        data-bs-target="#image_bluck_wrap">
                        <img src="{{asset('seller-assets/image/image_bluk/dummy_bluck_img.png')}}" alt="image">
                    </div>
                </div>
                <div class="image_bluck_col">
                    <div class="image_bluck">
                        <img src="{{asset('seller-assets/image/image_bluk/dummy_bluck_img.png')}}" alt="image">
                    </div>
                </div>
                <div class="image_bluck_col">
                    <div class="image_bluck">
                        <img src="{{asset('seller-assets/image/image_bluk/dummy_bluck_img.png')}}" alt="image">
                    </div>
                </div>
                <div class="image_bluck_col">
                    <div class="image_bluck">
                        <img src="{{asset('seller-assets/image/image_bluk/dummy_bluck_img.png')}}" alt="image">
                    </div>
                </div>
                <div class="image_bluck_col">
                    <div class="image_bluck">
                        <img src="{{asset('seller-assets/image/image_bluk/dummy_bluck_img.png')}}" alt="image">
                    </div>
                </div>
                <div class="image_bluck_col">
                    <div class="image_bluck">
                        <img src="{{asset('seller-assets/image/image_bluk/dummy_bluck_img.png')}}" alt="image">
                    </div>
                </div>
                <div class="image_bluck_col">
                    <div class="image_bluck">
                        <img src="{{asset('seller-assets/image/image_bluk/dummy_bluck_img.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="upload_wrap d-flex justify-content-center py-5">
            <a class="upload_btn">
                upload
            </a>
        </div>
    </div>
</div>

<!-- Checkin Bestätigung Modal -->
<div class="modal fade image_bluck_wrap" id="image_bluck_wrap" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content terimin_content">
            <div class="modal-body">
                <div class="modal_close_btn">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="select_bluck_img_wrap">
                    <div class="select_bluck_img">
                        <img src="{{asset('seller-assets/image/image_bluk/modal_bluck_img.png')}}" alt="modal image">
                    </div>

                    <div class="copy_link_wrap">
                        <p>https://supplier-prod-temp-files.s3.ap-southeast-1.amazonaws.com/products-upload/1643906320336/Canvas.jpg
                        </p>
                        <a class="copy_icon">
                            <img src="{{asset('seller-assets/image/image_bluk/copy_icon.svg')}}" alt="copy">
                        </a>
                    </div>
                </div>
            </div>

            <div class="product_bottom_shape">
                <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                        fill="url(#paint0_radial_700_3904)" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                        fill="url(#paint1_linear_700_3904)" fill-opacity="0.47" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" />
                    <defs>
                        <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1"
                            gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                            <stop stop-color="#A2CDC5" />
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                        </radialGradient>
                        <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734"
                            y2="-4.51455" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#A2CDC5" />
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-script')
@endsection