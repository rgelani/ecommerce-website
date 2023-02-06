@extends('seller.layouts.master')
@section('content')
<section class="content d-flex flex-column flex-column-fluid page_content form_content_page permission_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="title">CmsPage Information</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content_box mt-3">
                    <div class="d-flex flex-stack align-items-center border-bottom pb-3">
                        <h4 class="box-title">CmsPage</h4>
                    </div>
                    <form method="post" action="{{ $url }}" class="{{config('form_class.mt')}}" id="createMenu"
                        enctype="multipart/form-data">
                        @csrf
                        @if(isset($mode))
                        <input type="hidden" name="eid" value="{{($model->id)}}" />
                        @endif

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-5">
                                            <label class="col-form-label">Title</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-5">
                                            <input type="text" name="title"
                                                class="{{config('form_class.text')}} {{ !empty($errors->first('title')) ? 'is-invalid' : ''}}"
                                                placeholder="Enter Title"
                                                value="{{ isset($model) ? $model->title : ''}}">
                                            @if(!empty($errors->first('title')))
                                            <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                                            @endif
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
                                                <textarea name="description" id="description"
                                                    placeholder="Start Typing..">{{$model->description??''}}</textarea>
                                            </div>
                                            <span id="description-error"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-5">
                                            <label class="col-form-label">Active</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-5">
                                            <div
                                                class="radio-inline {{ !empty($errors->first('is_active')) ? 'is-invalid' : ''}}">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="{{config('form_class.radio')}}" name="is_active"
                                                        type="radio" value="Y" id="active" checked=""
                                                        {{ isset($model) && $model->is_active  == 'Y' ? 'checked' : ''}}>
                                                    <label class="form-check-label" for="active">
                                                        <div class="fw-bold fs-7 text-gray-800">Active</div>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="{{config('form_class.radio')}}" id="inactive"
                                                        name="is_active" type="radio" value="N"
                                                        {{ isset($model) && $model->is_active  == 'N' ? 'checked' : ''}}>
                                                    <label class="form-check-label" for="inactive">
                                                        <div class="fw-bold fs-7 text-gray-800">Inactive</div>
                                                    </label>
                                                </div>
                                            </div>
                                            @if(!empty($errors->first('is_active')))
                                            <span class="invalid-feedback">{{ $errors->first('is_active') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-5 d-flex justify-content-end">
                                    <a href="{{route('seller.cmspages')}}" title="{{ trans('messages.actiontext.cancel') }}"
                                        class="btn btn-sm btn-light">{{ trans('messages.actiontext.cancel') }}</a>
                                    <button class="btn btn-sm btn-theme-drk ms-5"
                                        title="{{ trans('messages.actiontext.save') }}">{{ trans('messages.actiontext.save') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('extra-script')
<script>
    $(document).ready(function(){
        CKEDITOR.replace("description", {
            height: 530
        });
    });
</script>
@endsection
