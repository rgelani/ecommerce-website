@extends('seller.layouts.master')

@section('extra-css')
<!-- style css -->
<link rel="stylesheet" href="{{asset('seller-assets/css/style.css')}}">

<!-- media css -->
<!-- <link rel="stylesheet" href="{{asset('seller-assets/css/media.css')}}"> -->

<link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/singleProduct_listing.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<style>
    .error-display {
        color: #FC0909;
    }
    .category-selected{
        background: linear-gradient(180deg, rgba(213, 240, 233, 0.43) 0%, rgba(141, 222, 203, 0) 100%);
    }
    .right-arrow::after{
        content: url("{{asset('seller-assets/image/single_product_listing/right_arrow.svg')}}");
        position: absolute;
        right: 15px;
        top: 30%;
    }
    /* .cm_multi_select .select2-container--default .select2-selection--multiple{
        border: hidden;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
        margin-right: 15px;
        color:white
    }
    .select2-container--default .select2-results__option--highlighted[aria-selected]{
        background: #4D7C73
    } */
</style>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
@endsection

@section('content')
<div class="single_product_listing">
    <div class="common_title">
        <h2>Single Product Listing</h2>
    </div>

    <form id="product_form" method="POST">
        @csrf
        <div class="search_input">
            <select class="search-control" name="search_input">
                <option selected="selected">Fashion</option>
                <option>Electronics</option>
                <option>Beauty & Personal Care</option>
                <option>Men's Grooming</option>
                <option>Nutrition & Health Care</option>
                <option>Baby Care</option>
                <option>Toys & School Supplies</option>
                <option>Sports & Fitness</option>
                <option>Books & Music</option>
            </select>
        </div>

        <div class="selecte_catagory_wrap">
            <button type="button" class="select_cat_btn" data-bs-toggle="modal" data-bs-target="#product_list">
                Selecte Catagory
            </button>
        </div>
        <span id="category_name-error"></span>
        <div class="catagory_parth" data-bs-toggle="modal" data-bs-target="#product_list">
            <a href=""></a>
        </div>

        <input type="hidden" name="category_name" id="category_name">
        <input type="hidden" name="category_name_first" id="category_name_first">
        <input type="hidden" name="category_text" id="category_text">
        <div class="product_photos">
            <div class="product_edit_upload_wrap">
                <div class="product_info">
                    <p>Product Photos (0/7)</p>

                    <a href="#0" class="edit_photos">Edit</a>
                </div>
                <input type="hidden" name="id" value="{{$product->id??''}}">

                <div class="photo_upload" style="margin-left: 20%;">
                    <div class="photo_img_left">
                        <div class="main_product_img">
                            <div class="photo_upload_section main_produt_info">
                                <div class="upload_file">
                                    <div class="plus_img">
                                        <img src="{{isset($product->productImage) && count(explode(',',$product->productImage->src))>0?asset('storage/product/'.explode(',',$product->productImage->src)[0]): asset('seller-assets/image/single_product_listing/big_upload.png')}}"
                                            alt="plus">
                                    </div>
                                    <p class="extraction">Not vaild Extraction</p>
                                    <div class="previewImgs">
                                        <img class="previewImg productPreviewImg" src="{{asset('seller-assets/image/single_product_listing/s.png')}}"
                                            alt="image">
                                    </div>
                                    <input type="file" size="60" class="preview_img product_image"
                                        name="product_image[0]" id="product_image">
                                    <input type="hidden" name="product_image_name[0]" class="image_value"
                                        value="{{isset($product->productImage->src)?explode(',',$product->productImage->src)[0]??'':''}}">

                                </div>
                            </div>
                        </div>
                        <ul style="margin-left:10px">
                            <li>
                                <div class="photo_upload_section">
                                    <div class="upload_file">
                                        <div class="plus_img">
                                            <img src="{{isset($product->productImage) && count(explode(',',$product->productImage->src))>1?asset('storage/product/'.explode(',',$product->productImage->src)[1]): asset('seller-assets/image/single_product_listing/plus.png')}}"
                                                alt="plus">
                                        </div>
                                        <p class="extraction">Not vaild Extraction</p>
                                        <div class="previewImgs">
                                            <img class="previewImg productPreviewImg" src="{{ asset('s.png') }}"
                                                alt="image">
                                        </div>
                                        <input type="file" size="60" class="preview_img product_image"
                                            name="product_image[0]" id="product_image" data-id="0">
                                        <input type="hidden" name="product_image_name[0]" data-id="0"
                                            class="image_value"
                                            value="{{isset($product->productImage->src)?explode(',',$product->productImage->src)[1]??'':''}}">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="photo_upload_section">
                                    <div class="upload_file">
                                        <div class="plus_img">
                                            <img src="{{isset($product->productImage) && count(explode(',',$product->productImage->src))>2?asset('storage/product/'.explode(',',$product->productImage->src)[2]): asset('seller-assets/image/single_product_listing/plus.png')}}"
                                                alt="plus">
                                        </div>
                                        <p class="extraction">Not vaild Extraction</p>
                                        <div class="previewImgs">
                                            <img class="previewImg productPreviewImg" src="{{ asset('s.png') }}"
                                                alt="image">
                                        </div>
                                        <input type="file" size="60" class="preview_img product_image"
                                            name="product_image[1]" id="product_image">
                                        <input type="hidden" name="product_image_name[1]" class="image_value"
                                            value="{{isset($product->productImage->src)?explode(',',$product->productImage->src)[2]??'':''}}">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="photo_upload_section">
                                    <div class="upload_file">
                                        <div class="plus_img">
                                            <img src="{{isset($product->productImage) && count(explode(',',$product->productImage->src))>3?asset('storage/product/'.explode(',',$product->productImage->src)[3]): asset('seller-assets/image/single_product_listing/plus.png')}}"
                                                alt="plus">
                                        </div>
                                        <p class="extraction">Not vaild Extraction</p>
                                        <div class="previewImgs">
                                            <img class="previewImg productPreviewImg" src="{{ asset('s.png') }}"
                                                alt="image">
                                        </div>
                                        <input type="file" size="60" class="preview_img product_image"
                                            name="product_image[2]" id="product_image">
                                        <input type="hidden" name="product_image_name[2]" class="image_value"
                                            value="{{isset($product->productImage->src)?explode(',',$product->productImage->src)[3]??'':''}}">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="photo_upload_section">
                                    <div class="upload_file">
                                        <div class="plus_img">
                                            <img src="{{isset($product->productImage) && count(explode(',',$product->productImage->src))>4?asset('storage/product/'.explode(',',$product->productImage->src)[4]): asset('seller-assets/image/single_product_listing/plus.png')}}"
                                                alt="plus">
                                        </div>
                                        <p class="extraction">Not vaild Extraction</p>
                                        <div class="previewImgs">
                                            <img class="previewImg productPreviewImg" src="{{ asset('s.png') }}"
                                                alt="image">
                                        </div>
                                        <input type="file" size="60" class="preview_img product_image"
                                            name="product_image[3]" id="product_image">
                                        <input type="hidden" name="product_image_name[3]" class="image_value"
                                            value="{{isset($product->productImage->src)?explode(',',$product->productImage->src)[4]??'':''}}">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="photo_upload_section">
                                    <div class="upload_file">
                                        <div class="plus_img">
                                            <img src="{{isset($product->productImage) && count(explode(',',$product->productImage->src))>5?asset('storage/product/'.explode(',',$product->productImage->src)[5]): asset('seller-assets/image/single_product_listing/plus.png')}}"
                                                alt="plus">
                                        </div>
                                        <p class="extraction">Not vaild Extraction</p>
                                        <div class="previewImgs">
                                            <img class="previewImg productPreviewImg" src="{{ asset('s.png') }}"
                                                alt="image">
                                        </div>
                                        <input type="file" size="60" class="preview_img product_image"
                                            name="product_image[4]" id="product_image">
                                        <input type="hidden" name="product_image_name[4]" class="image_value"
                                            value="{{isset($product->productImage->src)?explode(',',$product->productImage->src)[5]??'':''}}">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="photo_upload_section">
                                    <div class="upload_file">
                                        <div class="plus_img">
                                            <img src="{{isset($product->productImage) && count(explode(',',$product->productImage->src))>6?asset('storage/product/'.explode(',',$product->productImage->src)[6]): asset('seller-assets/image/single_product_listing/video.png')}}"
                                                alt="plus">
                                        </div>
                                        <p class="extraction">Not vaild Extraction</p>
                                        <div class="previewImgs">
                                            <img class="previewImg productPreviewImg" src="{{ asset('s.png') }}"
                                                alt="image">
                                        </div>
                                        <input type="file" size="60" class="preview_img product_image"
                                            name="product_image[5]" id="product_image">
                                        <input type="hidden" name="product_image_name[5]" class="image_value"
                                            value="{{isset($product->productImage->src)?explode(',',$product->productImage->src)[6]??'':''}}">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <span id="product_image-error"></span>
            </div>
        </div>

        <div class="price_stock_shipping_address_section mt-5">
            <div class="cm_title_input">
                <h2>Price,Stock,Shipping information.</h2>
            </div>

            <div class="price_information border_top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="cm_info_title">
                                    <h3>Listing Information</h3>
                                </div>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>SKU ID: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input">
                                        <input type="text" name="sku" value="{{$product->sku??''}}">
                                    </div>
                                </div>
                                <span id="sku-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="cm_info_title">
                                    <h3>Price Details</h3>
                                </div>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>MRP: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <div class="price_text">
                                            <span>₹</span>
                                        </div>
                                        <input type="number" name="MRP" value="{{$product->MRP??""}}">
                                    </div>
                                </div>
                                <span id="MRP-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Your Seling Price: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <div class="price_text">
                                            <span>₹</span>
                                        </div>
                                        <input type="number" name="selling_price"
                                            value="{{$product->selling_price??''}}">
                                    </div>
                                </div>
                                <span id="selling_price-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price_information border_top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="cm_info_title">
                                    <h3>Tax Details</h3>
                                </div>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>HSN Code : <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input">
                                        {{-- <div class="multiSelect">
                                            <select multiple class="multiSelect_field" data-placeholder="State"
                                                name="HSN_code" id="states">
                                                <option class="dropdown-item" value="">select hsn code</option>
                                                <div class="category_select_arrow">
                                                    <img>
                                                </div>
                                            </select>
                                        </div> --}}
                                    </div>


                                </div>
                                <span id="HSN_code-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Add HSN code Manuly : <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input">
                                        <input type="text" name="HSN_code" value="{{$product->HSN_code??''}}">
                                    </div>
                                </div>
                                <span id="HSN_code-error"></span>
                                <div class="info_dec">

                                    <div class="lable_dec">
                                        <p>GST : <sup>* </sup></p>
                                    </div>
                                    <div class="lable_dec">
                                        <div class="dropdown mb-5">
                                            <select class="dropdown-menu single_select" style="width:calc(100% + 20px)" name="GST" id="GST"
                                                type="select">

                                                <option class="dropdown-item" @if (isset($product->GST) && $product->GST
                                                    == "") selected @endif value="" >Select</option>
                                                <option class="dropdown-item" @if (isset($product->GST) && $product->GST
                                                    == "2") selected @endif value="2">2</option>
                                                <option class="dropdown-item" @if (isset($product->GST) && $product->GST
                                                    == "3") selected @endif value="3">3</option>
                                                <option class="dropdown-item" @if (isset($product->GST) && $product->GST
                                                    == "4") selected @endif value="4">4</option>
                                                <option class="dropdown-item" @if (isset($product->GST) && $product->GST
                                                    == "5") selected @endif value="5">5</option>
                                                <option class="dropdown-item" @if (isset($product->GST) && $product->GST
                                                    == "6") selected @endif value="6">6</option>
                                                <option class="dropdown-item" @if (isset($product->GST) && $product->GST
                                                    == "7") selected @endif value="7">7</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <span id="GST-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="cm_info_title">
                                    <h3>Inventory Details</h3>
                                </div>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Dishpach in day: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <input type="number" name="dispatch_in_day"
                                            value="{{$product->dispatch_in_day??''}}">
                                    </div>
                                </div>
                                <span id="dispatch_in_day-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Stock: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <input type="number" name="quantity" value="{{$product->quantity??''}}">
                                    </div>
                                </div>
                                <span id="quantity-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price_information border_top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="cm_info_title">
                                    <h3>Delivery charge to customer </h3>
                                </div>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Local Delivery: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input">
                                        <input type="number" name="local_delivery_charge"
                                            value="{{$product->local_delivery_charge??''}}">
                                    </div>
                                </div>
                                <span id="local_delivery_charge-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Zonal Delivery: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input">
                                        <input type="number" name="zonal_delivery_charge"
                                            value="{{$product->zonal_delivery_charge??''}}">
                                    </div>
                                </div>
                                <span id="zonal_delivery_charge-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>National Delivery: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input">
                                        <input type="number" name="national_delivery_charge"
                                            value="{{$product->national_delivery_charge??''}}">
                                    </div>
                                </div>
                                <span id="national_delivery_charge-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="cm_info_title">
                                    <h3>Packeges Details</h3>
                                </div>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Packege weight: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <input type="number" name="weight" value="{{$product->weight??''}}">
                                    </div>
                                </div>
                                <span id="weight-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Packege length: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <input type="number" name="length" value="{{$product->length??''}}">
                                    </div>
                                </div>
                                <span id="length-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Packege width: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <input type="number" name="width" value="{{$product->width??''}}">
                                    </div>
                                </div>
                                <span id="width-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Packege heigth: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <input type="number" name="height" value="{{$product->height??''}}">
                                    </div>
                                </div>
                                <span id="height-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price_stock_shipping_address_section mt-3 mt-lg-4">
            <div class="cm_title_input">
                <h2>Product Information.</h2>
            </div>

            <div class="price_information border_top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="cm_info_title">
                                    <h3>Title Description : <sup style="color: #FC0909;">*</sup></h3>
                                </div>
                                <div class="info_dec">
                                    <div class="text_area_dec w-100">
                                        <textarea name="title" id="" cols="30" rows="5"
                                            class="w-100">{{$product->title??''}}</textarea>
                                    </div>
                                </div>
                                <span id="title-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="info_dec mt-0">
                                    <div class="lable_dec">
                                        <p>Manufacturer : <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap mt-0">
                                        <div class="price_text">
                                            <span>₹</span>
                                        </div>
                                        <input type="text" name="manufacturer" value="{{$product->manufacturer??''}}">
                                    </div>
                                </div>
                                <span id="manufacturer-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Brand Name: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <div class="price_text">
                                            <span>₹</span>
                                        </div>
                                        <input type="text" name="brand_name" value="{{$product->brand_name??''}}">
                                    </div>
                                </div>
                                <span id="brand_name-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price_information border_top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="info_dec mt-0">
                                    <div class="lable_dec">
                                        <p>Color: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input">
                                        <input type="color" name="color" id="color" value="{{$product->color??''}}">
                                    </div>
                                </div>
                                <span id="color-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Size : <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input">
                                        <input type="text" name="size" id="size" value="{{$product->size??''}}">
                                    </div>
                                </div>
                                <span id="size-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cm_info_wrap">
                            <div class="cm_info_inner">
                                <div class="info_dec mt-0">
                                    <div class="lable_dec">
                                        <p>Model No: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <input type="text" name="model_no" id="model_no"
                                            value="{{$product->model_no??''}}">
                                    </div>
                                </div>
                                <span id="model_no-error"></span>
                                <div class="info_dec">
                                    <div class="lable_dec">
                                        <p>Pack of: <sup>*</sup></p>
                                    </div>
                                    <div class="lable_input price_wrap">
                                        <input type="text" name="pack_of" id="pack_of"
                                            value="{{$product->pack_of??''}}">
                                    </div>
                                </div>
                                <span id="pack_of-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price_information border_top">
                <div class="row">
                    <div class="col-12">
                        <div class="product_variant_wrap">
                            <div class="product_variant">
                                <p>Product Veriant</p>
                                <a href="#0" data-bs-toggle="modal" data-bs-target="#sku_modal" id="addVariant">Add
                                    Variant</a>
                            </div>

                            <div>
                                <ul class="variant_lisr">
                                    <?php $id=0?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price_information border_top">
                <div class="row">
                    <div class="col-12">
                        <div class="product_dec_wrap">
                            <div class="cm_info_title">
                                <h3>Product Description: <sup style="color: #FC0909;">*</sup></h3>
                            </div>

                            <div class="add_product_dec">
                                <div class="ck-editor-block">
                                    <textarea name="product_description" id="product_description"
                                        placeholder="Start Typing..">{{$product->description??''}}</textarea>
                                </div>
                                <span id="product_description-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price_stock_shipping_address_section">
            <div class="cm_title_input">
                <h2>Additional Information.</h2>
            </div>

            <div class="price_information border_top">
                <div class="row">
                    <div class="col-12">
                        <div class="add_info">
                            <div class="lable_dec">
                                <p>Key word: <sup>*</sup></p>
                                <span>(Max 10 Keyword)</span>
                            </div>

                            <div class="key_word_select cm_multi_select">
                                <select class="js-example-basic-multiple-10" name="keyword[]" multiple="multiple"
                                    id="keyword" type="select">
                                    @if(isset($product->keyword))
                                    @foreach (explode(',',$product->keyword) as $keyword)
                                    <option value="{{$keyword}}" selected>{{$keyword}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                <span id="keyword-error"></span>
                            </div>
                        </div>

                        <div class="add_info">
                            <div class="lable_dec">
                                <p>Product fetures:<sup>*</sup></p>
                                <span>(Max 15key Fetures)</span>
                            </div>

                            <div class="key_word_select cm_multi_select">
                                <select class="js-example-basic-multiple-15" name="key_features[]" multiple="multiple"
                                    id="key_features" type="select">
                                    @if(isset($product->key_features))
                                    @foreach (explode(',',$product->key_features) as $key_features)
                                    <option value="{{$key_features}}" selected>{{$key_features}}</option>
                                    @endforeach
                                    @endif
                                    <option value="AL">Red T-shirt</option>
                                    <option value="WY">Red T-shirt 1</option>
                                </select>
                                <span id="key_features-error"></span>
                            </div>
                        </div>

                        <div class="add_info">
                            <div class="lable_dec">
                                <p>Meta Tags: <sup>*</sup></p>
                                <span>(Max 10 Tags)</span>
                            </div>

                            <div class="key_word_select cm_multi_select">
                                <select class="js-example-basic-multiple-10" name="meta_tags[]" multiple="multiple"
                                    id="meta_tags" type="select">
                                    @if(isset($product->meta_tags))
                                    @foreach (explode(',',$product->meta_tags) as $meta_tags)
                                    <option value="{{$meta_tags}}" selected>{{$meta_tags}}</option>
                                    @endforeach
                                    @endif
                                    <option value="AL">T-shirt</option>
                                    <option value="WY">T-shirt 1</option>
                                </select>
                                <span id="meta_tags-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="return_order_wrap">
                <div class="row">
                    <div class="col-xl-5 col-md-6">
                        <div class="return_info_dec">
                            <div class="lable_dec">
                                <p>Return Order: <sup>*</sup></p>
                            </div>
                            <div class="select_wrap mb-4">
                                <div class="dropdown">
                                    <select class="dropdown-menu single_select" name="return_order" id="return_order"
                                        type="select">
                                        <option class="dropdown-item" @if (isset($product->return_order) &&
                                            $product->return_order == "") selected @endif value="" >Select</option>
                                        <option class="dropdown-item" @if (isset($product->return_order) &&
                                            $product->return_order == "1") selected @endif value="1">Yes</option>
                                        <option class="dropdown-item" @if (isset($product->return_order) &&
                                            $product->return_order == "0") selected @endif value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <span id="return_order-error"></span>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="return_info_dec">
                            <div class="lable_dec">
                                <p>Return Order in day: <sup>*</sup></p>
                            </div>
                            <div class="select_wrap mb-4">
                                <div class="dropdown">
                                    <select class="dropdown-menu single_select" name="return_order_in_day"
                                        id="return_order_in_day" type="select">
                                        <option class="dropdown-item" @if (isset($product->return_order_in_day) &&
                                            $product->return_order_in_day == "") selected @endif value="">Select
                                        </option>
                                        <option class="dropdown-item" @if (isset($product->return_order_in_day) &&
                                            $product->return_order_in_day == "2") selected @endif value="2">2</option>
                                        <option class="dropdown-item" @if (isset($product->return_order_in_day) &&
                                            $product->return_order_in_day == "3") selected @endif value="3">3</option>
                                        <option class="dropdown-item" @if (isset($product->return_order_in_day) &&
                                            $product->return_order_in_day == "4") selected @endif value="4">4</option>
                                        <option class="dropdown-item" @if (isset($product->return_order_in_day) &&
                                            $product->return_order_in_day == "5") selected @endif value="5">5</option>
                                        <option class="dropdown-item" @if (isset($product->return_order_in_day) &&
                                            $product->return_order_in_day == "6") selected @endif value="6">6</option>
                                        <option class="dropdown-item" @if (isset($product->return_order_in_day) &&
                                            $product->return_order_in_day == "7") selected @endif value="7">7</option>
                                    </select>
                                </div>
                            </div>
                            <span id="return_order_in_day-error"></span>
                        </div>
                    </div>
                </div>

                <div class="row date_wrap">
                    <div class="col-md-12">
                        <div class="return_info_dec">
                            <div class="sale_wrap">
                                <div class="lable_dec">
                                    <p>Sale price: <sup>*</sup></p>
                                </div>
                                <div class="lable_input price_wrap">
                                    <div class="price_text">
                                        <span>₹</span>
                                    </div>
                                    <input type="text" name="sale_price" id="sale_price"
                                        value="{{$product->sale_price??''}}">
                                </div>
                                <span id="sale_price-error"></span>
                            </div>

                            <div class="start_end_date ml-4">
                                <div class="date_title_wrap">
                                    <p>Sale Start Date:</p>
                                    <div class="position-relative">
                                        <input type="text" placeholder="dd/mm/yyyy" onfocus="(this.type='date')"
                                            name="sale_start_date" value="{{$product->sale_start_date??''}}">
                                        <div class="cal_img">
                                            <img src="{{asset('seller-assets/image/single_product_listing/calender.png')}}"
                                                alt="icon" width="15px" />
                                        </div>
                                        <span id="sale_start_date-error"></span>
                                    </div>
                                </div>
                                <div class="date_title_wrap">
                                    <p>Sale End Date:</p>
                                    <div class="position-relative">
                                        <input type="text" placeholder="dd/mm/yyyy" onfocus="(this.type='date')"
                                            name="sale_end_date" value="{{$product->sale_end_date??''}}">
                                        <div class="cal_img">
                                            <img src="{{asset('seller-assets/image/single_product_listing/calender.png')}}"
                                                alt="icon" width="15px">
                                        </div>
                                        <span id="sale_end_date-error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-5 col-md-6">
                        <div class="return_info_dec">
                            <div class="lable_dec">
                                <p>Country of Origin: <sup>*</sup></p>
                            </div>
                            <div class="return_input">
                                <input type="text" name="country_of_origin" id="country_of_origin"
                                    value="{{$product->country_of_origin??''}}">
                            </div>
                            <span id="country_of_origin-error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="status" value="0">
        <div class="last_btn">
            <button id="cancelForm">Cancle</button>
            <button type="submit" id="#draft">Draft</button>
            {{-- <a href="#0">Upload</a> --}}
            <button type="submit" id="#upload">Upload</button>
        </div>
    </form>
</div>

<!-- Checkin Bestätigung Modal -->
<div class="modal fade  product_list_wrap" id="product_list" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content terimin_content">
            <div class="modal-body">
                <div class="modal_close_btn">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="variant_form_close"></button>
                </div>
                <div class="category_menu">
                    {!! $data !!}
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
                        <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                            <stop stop-color="#A2CDC5" />
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                        </radialGradient>
                        <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734" y2="-4.51455"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#A2CDC5" />
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</div>

<form id="variant_form">
    <div class="modal fade sku_wrap" id="sku_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content terimin_content">
                <input type="hidden" name="variant_id" name="variant_id">
                <div class="modal-body">
                    <div class="modal_close_btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="sku_modal">
                        <div class="info_dec">
                            <div class="lable_dec">
                                <p>SKU_ID:<sup>*</sup></p>
                            </div>
                            <input type="hidden" name="variant_id" value="">
                            <div class="lable_input price_wrap">
                                <input type="text" class="pl-2" id="SKU_id" name="SKU_id">
                            </div>
                        </div>
                        <span id="SKU_id-error"></span>
                        <div class="info_dec">
                            <div class="lable_dec">
                                <p>Color:<sup>*</sup></p>
                            </div>
                            <div class="lable_input price_wrap">
                                <input type="color" class="pl-2" name="variant_color" id="variant_color" value="#rrggbb">
                            </div>
                        </div>
                        <span id="variant_color-error"></span>

                        <div class="add_img_wrap">
                            <h3>Add image</h3>

                            <div class="variant_moddal_wrap">
                                <div class="variant_modal_big_image">
                                    <div class="photo_upload_section">
                                        <div class="upload_file">
                                            <div class="plus_img">
                                                <img src="{{ asset('seller-assets/image/single_product_listing/plus.png') }}"
                                                    alt="plus" class="priviewVariant">
                                            </div>
                                            <p class="extraction">Not vaild Extraction</p>
                                            <div class="previewImgs ">
                                                <img class="previewImg variant_image_preview" src="{{ asset('s.png') }}"
                                                    alt="image">
                                            </div>
                                            <input type="file" size="60" class="preview_img variant_image"
                                                name="variant_image[0]" id="variant_image">
                                            <input type="hidden" name="variant_image_value[0]"
                                                class="variant_image_value" value="">
                                        </div>
                                    </div>
                                </div>
                                <ul class="variant_modal_image">
                                    <li>
                                        <div class="photo_upload_section">
                                            <div class="upload_file">
                                                <div class="plus_img">
                                                    <img src="{{ asset('seller-assets/image/single_product_listing/plus.png') }}"
                                                        alt="plus" class="priviewVariant">
                                                </div>
                                                <p class="extraction">Not vaild Extraction</p>
                                                <div class="previewImgs">
                                                    <img class="previewImg variant_image_preview"
                                                        src="{{ asset('s.png') }}" alt="image">
                                                </div>
                                                <input type="file" size="60" class="preview_img variant_image"
                                                    name="variant_image[1]" id="variant_image">
                                                <input type="hidden" name="variant_image_value[1]"
                                                    class="variant_image_value" value="">

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="photo_upload_section">
                                            <div class="upload_file">
                                                <div class="plus_img">
                                                    <img src="{{ asset('seller-assets/image/single_product_listing/plus.png') }}"
                                                        alt="plus" class="priviewVariant">
                                                </div>
                                                <p class="extraction">Not vaild Extraction</p>
                                                <div class="previewImgs">
                                                    <img class="previewImg variant_image_preview"
                                                        src="{{ asset('s.png') }}" alt="image">
                                                </div>
                                                <input type="file" size="60" class="preview_img variant_image"
                                                    name="variant_image[2]" id="variant_image">
                                                <input type="hidden" name="variant_image_value[2]"
                                                    class="variant_image_value" value="">

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="photo_upload_section">
                                            <div class="upload_file">
                                                <div class="plus_img">
                                                    <img src="{{ asset('seller-assets/image/single_product_listing/plus.png') }}"
                                                        alt="plus" class="priviewVariant">
                                                </div>
                                                <p class="extraction">Not vaild Extraction</p>
                                                <div class="previewImgs">
                                                    <img class="previewImg variant_image_preview"
                                                        src="{{ asset('s.png') }}" alt="image">
                                                </div>
                                                <input type="file" size="60" class="preview_img variant_image"
                                                    name="variant_image[3]" id="variant_image">
                                                <input type="hidden" name="variant_image_value[3]"
                                                    class="variant_image_value" value="">

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="photo_upload_section">
                                            <div class="upload_file">
                                                <div class="plus_img">
                                                    <img src="{{ asset('seller-assets/image/single_product_listing/plus.png') }}"
                                                        alt="plus" class="priviewVariant">
                                                </div>
                                                <p class="extraction">Not vaild Extraction</p>
                                                <div class="previewImgs">
                                                    <img class="previewImg variant_image_preview"
                                                        src="{{ asset('s.png') }}" alt="image">
                                                </div>
                                                <input type="file" size="60" class="preview_img variant_image"
                                                    name="variant_image[4]" id="variant_image">
                                                <input type="hidden" name="variant_image_value[4]"
                                                    class="variant_image_value" value="">

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="photo_upload_section">
                                            <div class="upload_file">
                                                <div class="plus_img">
                                                    <img src="{{ asset('seller-assets/image/single_product_listing/plus.png') }}"
                                                        alt="plus" class="priviewVariant">
                                                </div>
                                                <p class="extraction">Not vaild Extraction</p>
                                                <div class="previewImgs">
                                                    <img class="previewImg variant_image_preview"
                                                        src="{{ asset('s.png') }}" alt="image">
                                                </div>
                                                <input type="file" size="60" class="preview_img variant_image"
                                                    name="variant_image[5]" id="variant_image">
                                                <input type="hidden" name="variant_image_value[5]"
                                                    class="variant_image_value" value="">

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <span id="variant_image-error"></span>
                            </div>
                        </div>

                        <div class="info_dec">
                            <div class="lable_dec">
                                <p>Size:<sup>*</sup></p>
                            </div>
                            <div class="variant_size">
                                <div class="cm_multi_select size_select mt-0">
                                    <select class="select2insidemodal" name="variant_size[]" data-placeholder="Yours Placeholder" multiple="multiple"
                                        id="variant_size">
                                        <option value="s">S</option>
                                        <option value="m">M</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <span id="variant_size-error"></span>
                        <div class="last_btn">

                            <button type="submit">save</button>
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
</form>
<!--end dashbord product view -->
@endsection

@section('extra-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
    integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
    console.log();

    function getCategories (elem, id) {
        let url = '{{ route('seller.product.get_category', ":id") }}';
        url = url.replace(':id', id);

        $.ajax({
            type: "get",
            url: url,
            data: {},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            processData: false,
            contentType: false,
            success: function(response) {
                if (!response.error)
                {
                    var str = "<div class='top_menu'><ul>";
                    response.forEach(element => {
                        str += `<li>
                                <a href='#0' data-menuid='${element.id}' data-menu='${element.name}'>${element.name}</a>
                            </li>`
                    });
                    str += "</ul></div>";
        
                    $(elem).html(str);

                    $('.sec_menu li').click(function (e) {
                        let classes = "category-selected right-arrow position-relative";
                        $('.sec_menu li').removeClass(classes);
                        $(this).addClass(classes)
                        getCategories(".third_menu", $(this).children('a').data("menuid"))
                    });

                    $('.third_menu li').click(function (e) {
                        let classes = "category-selected";
                        $('.third_menu li').removeClass(classes);
                        $(this).addClass(classes);
                    });
                }
            }
        });
    }

        $(document).ready(function(){

            $('.first_menu li').click(function (e) {
                let classes = "category-selected right-arrow position-relative";
                $('.first_menu li').removeClass(classes);
                $(this).addClass(classes)
                $(".third_menu").html("");
                getCategories(".sec_menu", $(this).children('a').data("menuid"))
            })

            $('.product_image').change(function (e) {
                e.preventDefault();
                $(this).parent().children('.image_value').val('')
            });
            $('.variant_image').change(function (e) {
                e.preventDefault();
                $(this).parent().children('.variant_image_value').val('')
            });

                $('#upload').click(function (e) {
                e.preventDefault();
                $('input[name=status]').val(1);
            });
            $('#draft').click(function (e) {
                e.preventDefault();
                $('input[name=status]').val(1);
            });
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })


            $(".select2insidemodal").select2({
                tags: true,
                placeholder: "Type here...",
            });
            $(".size_select .select2-search__field").css('width', "auto")

            $(".search-control").select2({
                tags: false
            });

            CKEDITOR.replace("product_description", {
                height: 535
            });


            $('.js-example-basic-multiple').select2({
                tags: true,
            });

            $('.js-example-basic-multiple-10').select2({
                placeholder: "Type here...",
                tags: true,
                maximumSelectionLength: 10,
            });

            $('.js-example-basic-multiple-15').select2({
                placeholder: "Type here...",
                tags: true,
                maximumSelectionLength: 15,
            });

        });
        var formData = new FormData($('#product_form')[0]);
        var variant = {};
        $('.cancelForm').click(function (e) {
            e.preventDefault();
            variant = {};
            location.reload();

        });

        var id = parseInt('{{$id}}');

        $("#variant_form").validate({
            rules: {
                SKU_id: {
                    required: true
                },
                variant_color: {
                    required: true,
                },
                'variant_size[]': {
                    required: true
                },
                // 'variant_image[0]':{
                //     required:$('.variant_image_value').eq(0).val()=='',
                // }

            },
            messages: {

            },

            errorElement: 'span',
            errorClass: 'error-display',
            errorPlacement: function(error, element) {

                var id = $(error).attr('id');
                $(`#${id}`).html(error);
              console.log($('.variant_image_value').eq(0).val());
            },

            submitHandler: function(form) {
                var image =[];

                console.log($('input[name=variant_id]').val());
                if($('input[name=variant_id]').val())
                {
                    image = variant[$('input[name=variant_id]').val()].image;
                    var newImage= [];
                    $('.variant_image_value').each(function(i, obj) {
                        if($(this).val())
                        {

                            newImage.push($(this).val());
                        }
                    });


                    var Dataimage = [];

                    if(newImage)
                    {

                        var variant_image = variant[$('input[name=variant_id]').val()].variant_image.src.split(",");
                        if(variant_image.filter(x => !newImage.includes(x)))
                        {
                            $.each(variant_image.filter(x => !newImage.includes(x)), function (indexInArray, valueOfElement) {
                                delete variant_image[variant_image.findIndex((obj => obj == valueOfElement))]
                            });
                            variant[$('input[name=variant_id]').val()].variant_image.src = variant_image.toString();
                        }

                        if(image)
                        {
                                for (const key of image.keys()) {
                                    $.each(newImage.filter(x => parseInt(x)!==NaN), function (indexInArray, valueOfElement) {
                                        if(key == indexInArray)
                                        {
                                            Dataimage.push(image[key]);
                                        }


                                    });
                                }
                                $('.variant_image').each(function(i, obj) {
                                    var file_data = $(this)[0].files;
                                    if (file_data.length) {
                                        Dataimage.push(file_data[0]);
                                    }
                                });

                        }
                    }

                    variant[$('input[name=variant_id]').val()].image =Dataimage;
                    variant[$('input[name=variant_id]').val()].variant_color =$('#variant_color').val();
                    variant[$('input[name=variant_id]').val()].SKU_id =$('#SKU_id').val();
                    variant[$('input[name=variant_id]').val()].variant_size =$('#variant_size').val();
                    $('input[name=variant_id]').val('');

                }else
                {
                    $('.variant_image').each(function(i, obj) {
                        var file_data = $(this)[0].files;
                        if (file_data.length) {
                            image.push(file_data[0]);
                        }
                    });
                    variant[id]= {'image':image,variant_color:$('input[name=variant_color]').val(),SKU_id:$('input[name=SKU_id]').val(),variant_size:$('#variant_size').val(),id:id,variant_image:{src:''},variant_id:''};
                    // $('.select2-selection__choice').remove();
                    $('.variant_lisr').append(`<li class="delete-variant-${id}">
                        <p><svg data-bs-toggle="modal" data-bs-target="#sku_modal" onClick="editVariant(${id})" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">
                            <path d="M 22.828125 3 C 22.316375 3 21.804562 3.1954375 21.414062 3.5859375 L 19 6 L 24 11 L 26.414062 8.5859375 C 27.195062 7.8049375 27.195062 6.5388125 26.414062 5.7578125 L 24.242188 3.5859375 C 23.851688 3.1954375 23.339875 3 22.828125 3 z M 17 8 L 5.2597656 19.740234 C 5.2597656 19.740234 6.1775313 19.658 6.5195312 20 C 6.8615312 20.342 6.58 22.58 7 23 C 7.42 23.42 9.6438906 23.124359 9.9628906 23.443359 C 10.281891 23.762359 10.259766 24.740234 10.259766 24.740234 L 22 13 L 17 8 z M 4 23 L 3.0566406 25.671875 A 1 1 0 0 0 3 26 A 1 1 0 0 0 4 27 A 1 1 0 0 0 4.328125 26.943359 A 1 1 0 0 0 4.3378906 26.939453 L 4.3632812 26.931641 A 1 1 0 0 0 4.3691406 26.927734 L 7 26 L 5.5 24.5 L 4 23 z"/></svg>
                        <svg onClick="deleteVariant(${id})" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>   SKU:- ${$('input[name=SKU_id]').val()}</p></li>`);

                        id++;
                }
                $('#variant_form')[0].reset();
                    $('.variant_image_preview').attr('src', `{{asset('seller-assets/image/single_product_listing/plus.png')}}`);
                    // $('#variant_form').find('.select2-selection__choice__remove').click();
                    $('#variant_form .select2-selection__choice__remove').each(function (index, element) {
                        $(element).click();
                    });
            }
        });

        $("#product_form").validate({
            rules: {
                sku: {
                    required: true
                },
                MRP: {
                    required: true,
                    number: true
                },
                selling_price: {
                    required: true,
                    number: true,
                    // min: parseInt($('input[name=MRP]').val())
                },
                HSN_code: {
                    required: true
                },
                category_name: {
                    required: true
                },
                GST: {
                    required: true
                },
                dispatch_in_day: {
                    required: true,
                    number: true
                },
                quantity: {
                    required: true,
                    number: true
                },
                local_delivery_charge: {
                    required: true,
                    number: true
                },
                zonal_delivery_charge: {
                    required: true,
                    number: true
                },
                national_delivery_charge: {
                    required: true,
                    number: true
                },
                weight: {
                    required: true,
                    number: true
                },
                length: {
                    required: true,
                    number: true
                },
                width: {
                    required: true,
                    number: true
                },
                height: {
                    required: true,
                    number: true
                },
                title: {
                    required: true
                },
                manufacturer: {
                    required: true
                },
                brand_name: {
                    required: true
                },
                product_description: {
                    required: function()
                    {
                        CKEDITOR.instances.product_description.updateElement();
                    },
                },
                'keyword[]': {
                    required: true,
                    maxlength: 10
                },

                'key_features[]': {
                    required: true,
                    maxlength: 10
                },
                'meta_tags[]': {
                    required: true,
                    maxlength: 10
                },
                return_order: {
                    required: true
                },
                return_order_in_day: {
                    required: true
                },
                sale_start_date: {
                    required: true
                },
                sale_end_date: {
                    required: true
                },
                country_of_origin: {
                    required: true
                },

                sale_price: {
                    required: true
                },
                'product_image[0]': {
                    required: $('.image_value').eq(0).val()=='',
                },
                'product_image[1]': {
                    required: $('.image_value').eq(1).val()=='',
                },
                'product_image[2]': {
                    required: $('.image_value').eq(2).val()=='',
                },
                'product_image[3]': {
                    required: $('.image_value').eq(3).val()=='',
                },
                color: {
                    required: true,
                },
                size: {
                    required: true,
                },
                model_no: {
                    required: true,
                },
                pack_of: {
                    required: true,
                },
            },
            messages: {

            },

            errorElement: 'span',
            errorClass: 'error-display',
            errorPlacement: function(error, element) {
                var id = $(error).attr('id');
                $(`#${id}`).html(error);
            },

            submitHandler: function(form) {
                var formData = new FormData($('#product_form')[0]);
                $.each(variant, function( index, value ) {
                    $.each(value.image, function( indexsecond,images  ) {
                        // formData.append(`image[${index}}][${indexsecond}]`,image);
                        formData.append(`variantImages[${value.id}][${indexsecond}]`,images);
                    });
                });

                formData.append('variants',JSON.stringify(variant));
                formData.append('description',CKEDITOR.instances['product_description'].getData());

                $.ajax({
                    type: "post",
                    url: '{{ route('seller.product.store') }}',
                    data: formData,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.error)
                        {
                            $('.error-display').html('');
                            $.each(response.error, function(index, item) {
                                console.log(index);
                                $(`#${index}-error`).html(item).addClass('error-display').removeAttr('style');
                            });

                        }
                        else
                        {
                            location.href="{{route('seller.product.view')}}"
                        }
                    }
                });
            },
        });




        function deleteVariant(id)
        {
            delete variant[id];
            $(`.delete-variant-${id}`).remove();

        }

        if('{{isset($product)}}')
        {

                var response = JSON.parse('{!!$product->variants??false!!}'??'')
                $.each(response, function (indexInArray, variantData) {
                console.log(variantData);
                variant[id]= {'image':[],variant_color:variantData.color,SKU_id:variantData.sku,variant_size:variantData.size.split(","),id:id,variant_id:variantData.id,variant_image:variantData.variant_image};

                $('.variant_lisr').append(`<li class="delete-variant-${id}"><p><svg data-bs-toggle="modal" data-bs-target="#sku_modal" onClick="editVariant(${id})" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">
                <path d="M 22.828125 3 C 22.316375 3 21.804562 3.1954375 21.414062 3.5859375 L 19 6 L 24 11 L 26.414062 8.5859375 C 27.195062 7.8049375 27.195062 6.5388125 26.414062 5.7578125 L 24.242188 3.5859375 C 23.851688 3.1954375 23.339875 3 22.828125 3 z M 17 8 L 5.2597656 19.740234 C 5.2597656 19.740234 6.1775313 19.658 6.5195312 20 C 6.8615312 20.342 6.58 22.58 7 23 C 7.42 23.42 9.6438906 23.124359 9.9628906 23.443359 C 10.281891 23.762359 10.259766 24.740234 10.259766 24.740234 L 22 13 L 17 8 z M 4 23 L 3.0566406 25.671875 A 1 1 0 0 0 3 26 A 1 1 0 0 0 4 27 A 1 1 0 0 0 4.328125 26.943359 A 1 1 0 0 0 4.3378906 26.939453 L 4.3632812 26.931641 A 1 1 0 0 0 4.3691406 26.927734 L 7 26 L 5.5 24.5 L 4 23 z"/></svg><svg onClick="deleteVariant(${id})" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>   SKU:- ${variantData.sku}</p></li>`);
                id++;

            });
        }



        function editVariant(id){


                    $('input[name=variant_id]').val(id);
                    var response = variant[id];
                    $('#variant_form')[0].reset();

                    $('.variant_image_preview').attr('src', `{{asset('seller-assets/image/single_product_listing/plus.png')}}`);
                    $('input[name=SKU_id]').val(response.SKU_id);
                    $('input[name=variant_color]').val(response.variant_color);
                    // $('#variant_form').find('.select2-selection__choice__remove').click();
                    $('#variant_form .select2-selection__choice__remove').each(function (index, element) {
                        console.log(this);
                        $(this.class).click();
                    });
                    $.each(response.variant_size, function (indexInArray, valueOfElement) {
                            $(`#variant_size option[value="${valueOfElement}"]`).remove();
                            $('#variant_size').append($(`<option value="${valueOfElement}" selected>${valueOfElement}</option>`));
                        });
                    var key = 0;

                    if(response.variant_id)
                    {

                        $.each(response.variant_image.src.split(","), function (indexInArray, valueOfElement) {

                            if(valueOfElement)
                            {
                                $('.variant_image_preview').eq(key).attr('src', `{{ URL::asset('/storage/product/variant') }}/${valueOfElement}`).css('display','inline');
                                $('.priviewVariant').eq(key).parent().css('display', 'none');
                                $('.variant_image_value').eq(key).val(valueOfElement);
                                key++;
                            }
                        });
                    }
                    if(response.image){

                        $.each(response.image, function (indexInArray, valueOfElement) {
                            var file = URL.createObjectURL(valueOfElement) ;
                            $('.variant_image_preview').eq(key).attr('src',`${file}`).css('display','inline');
                            $('.priviewVariant').eq(key).parent().css('display', 'none');
                            $('.variant_image_value').eq(key).val(indexInArray);
                            key++;

                        });
                    }



            }

            $('#addVariant').click(function (e) {
                e.preventDefault();
                // console.log($('#variant_form').find('.select2-select ion__choice__remove'));
                $('input[name=variant_id]').val('');
                $('#variant_form')[0].reset();
                $('#variant_form .select2-selection__choice__remove').each(function (index, element) {
                        $(element).click();
                    });
                $('.variant_image_preview').attr('src', `{{asset('seller-assets/image/single_product_listing/plus.png')}}`);
                // $('.variant_image_preview').attr('src', `{{asset('seller-assets/image/single_product_listing/plus.png')}}`);


            });

            function categoryTextCange() {
                    $(document).ready(function () {
                        $(".multiSelect_field").select2();
                        $.ajax({
                            type: "get",
                            url: "{{ route('seller.product.hsn.code') }}",
                            data: {
                                name : $('input[name=category_text]').val()
                            },
                            dataType: "json",
                            success: function (response) {
                                console.log(response);
                            }
                        });
                    });

            }



</script>
@endsection
