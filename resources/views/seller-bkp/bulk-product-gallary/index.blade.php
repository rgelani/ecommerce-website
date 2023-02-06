@extends('seller.layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/style.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/singleProduct_listing.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/image_bulk_upload.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/productview.css')}}">--}}
    <link type="text/css" rel="stylesheet" href="{{asset('seller-assets/css/image-uploader.min.css')}}">
@endsection

@section('content')
    <!--start rating section -->
    <div class="product_view_rating">
        <div class="col-xl-12">
            <div class="single_product_listing image_bluck_listing">
                <div class="common_title">
                    <h2>Upload Your Photos</h2>
                </div>
                @include('seller.layouts.message')
                <form id="bulk-image-gallery" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div id="image_clear_id" style="margin-top: 25px">
                        <div class="col-12 input-images">
                            <label class="form-label">Images</label>
                        </div>
                    </div>
                    <div class="upload_wrap d-flex justify-content-center">
                        <button type="button" class="upload_btn" onclick="bulkImageUploadGallary();">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end rating section -->

    <!-- Checkin Bestätigung Modal -->
    {{--    <div class="modal fade" id="imageModal" role="dialog">--}}
    {{--        <div class="modal-dialog modal-dialog-centered">--}}
    {{--            <div class="modal-content terimin_content">--}}
    {{--                <div class="modal-body">--}}
    {{--                    <div class="modal_close_btn">--}}
    {{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
    {{--                    </div>--}}

    {{--                    <div class="select_bluck_img_wrap">--}}
    {{--                        <div class="select_bluck_img">--}}
    {{--                            <img src="" alt="" id="image-add-url" />--}}
    {{--                        </div>--}}

    {{--                        <div class="copy_link_wrap">--}}
    {{--                            <strong id="image_url"></strong>--}}
    {{--                            --}}{{--                                <input type="text" name="image" id="image_url" value="" class="form-control">--}}
    {{--                            <a href="#0" class="copy_icon copy-text close" data-clipboard-target="#image_url">--}}
    {{--                                <img src="{{asset('seller-assets/image/image_bluk/copy_icon.svg')}}" alt="copy">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="product_bottom_shape">--}}
    {{--                    <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
    {{--                        <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint0_radial_700_3904)" />--}}
    {{--                        <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint1_linear_700_3904)" fill-opacity="0.47" />--}}
    {{--                        <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" />--}}
    {{--                        <defs>--}}
    {{--                            <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">--}}
    {{--                                <stop stop-color="#A2CDC5" />--}}
    {{--                                <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />--}}
    {{--                            </radialGradient>--}}
    {{--                            <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734" y2="-4.51455" gradientUnits="userSpaceOnUse">--}}
    {{--                                <stop stop-color="#A2CDC5" />--}}
    {{--                                <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />--}}
    {{--                            </linearGradient>--}}
    {{--                        </defs>--}}
    {{--                    </svg>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection

@section('extra-script')
    <!-- scrript js -->
    {{--    <script src="{{asset('seller-assets/js/script.js')}}"></script>--}}
    {{--    <script src="{{asset('seller-assets/js/copyToClipBoard.js')}}"></script>--}}
    <script src="https://cdn.jsdelivr.net/clipboard.js/1.5.12/clipboard.min.js"></script>
    <script src="{{asset('seller-assets/js/image-uploader.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: "{{route('seller.uploaded-preview-images')}}",
                type: 'GET',
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (response) {
                    if(response.length === 0){
                        nullImageUploader(response)
                    }else{
                        imageUploader(response)
                    }
                },
            });
        });

        function imageUploader(response) {
            $('.input-images').imageUploader({
                maxFiles: Infinity,
                preloadedInputName: 'old',
                imagesInputName: 'images',
                preloaded: response,
            });
        }

        function nullImageUploader() {
            $('.input-images').imageUploader({
                maxFiles: Infinity,
                preloadedInputName: 'old',
                imagesInputName: 'images',
            });
        }

        function bulkImageUploadGallary() {

            var formdetails = new FormData($("#bulk-image-gallery")[0]);

            $.ajax({
                url: "{{route('seller.bulk-image-uploader')}}",
                type: 'POST',
                data: formdetails,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response)
                    if (response.status === 200) {
                        Swal.fire("Success", response.msg, "success");
                        setInterval(function () {
                            location.reload(true)
                        }, 1500);
                    }
                },
                error: function (error) {
                    Swal.fire("Error", error.msg, "error");
                }
            });
        }

    </script>

    {{--    <script>--}}
    {{--        $(function () {--}}
    {{--            new Clipboard('.copy-text');--}}
    {{--        });--}}

    {{--        // $('.close').on('click', function () {--}}
    {{--        //     setTimeout(function () {--}}
    {{--        //         $('#imageModal').modal('hide');--}}
    {{--        //     }, 500); // milliseconds--}}
    {{--        // });--}}
    {{--    </script>--}}
    {{--    <script>--}}

    {{--        $(document).ready(function () {--}}
    {{--            //file uploads js--}}
    {{--            $('.chooseFile').bind('change', function () {--}}
    {{--                var filename = $(this).val();--}}
    {{--                if (/^\s*$/.test(filename)) {--}}
    {{--                    $(this).parents('.res_common_input_wrap').find(".file-upload").removeClass('active');--}}
    {{--                    $(this).parents('.res_common_input_wrap').find(".noFile").text("No file chosen...");--}}
    {{--                } else {--}}
    {{--                    $(this).parents('.res_common_input_wrap').find(".file-upload").addClass('active');--}}
    {{--                    $(this).parents('.res_common_input_wrap').find(".noFile").text(filename.replace("C:\\fakepath\\", ""));--}}
    {{--                }--}}
    {{--            });--}}

    {{--            //Popover Js--}}
    {{--            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))--}}
    {{--            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {--}}
    {{--                return new bootstrap.Popover(popoverTriggerEl)--}}
    {{--            })--}}

    {{--            $('.js-example-basic-multiple').select2();--}}

    {{--            $(".select2insidemodal").select2({--}}
    {{--                dropdownParent: $("#sku_modal")--}}
    {{--            });--}}
    {{--        });--}}

    {{--        function copyToClipboard(text) {--}}
    {{--            if (window.clipboardData && window.clipboardData.setData) {--}}
    {{--                // IE specific code path to prevent textarea being shown while dialog is visible.--}}
    {{--                return clipboardData.setData("Text", text);--}}

    {{--            } else if (document.queryCommandSupported) {--}}

    {{--                console.log('afae')--}}
    {{--                if (document.queryCommandSupported("copy")) {--}}
    {{--                    var textarea = document.createElement("textarea");--}}
    {{--                    textarea.textContent = text;--}}
    {{--                    textarea.style.position = "fixed"; // Prevent scrolling to bottom of page in MS Edge.--}}
    {{--                    console.log(textarea)--}}
    {{--                    document.body.appendChild(textarea);--}}
    {{--                    textarea.select();--}}
    {{--                    try {--}}
    {{--                        console.log('true')--}}
    {{--                        document.execCommand("copy"); // Security exception may be thrown by some browsers.--}}
    {{--                    } catch (ex) {--}}
    {{--                        console.warn("Copy to clipboard failed.", ex);--}}
    {{--                        return false;--}}
    {{--                    } finally {--}}
    {{--                        document.body.removeChild(textarea);--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            }--}}
    {{--        }--}}

    {{--        function status(clickedBtn) {--}}
    {{--            var text = document.getElementById(clickedBtn.dataset.descRef).innerText;--}}
    {{--            console.log(text)--}}
    {{--            copyToClipboard(text);--}}

    {{--            clickedBtn.value = "Copied to clipboard";--}}
    {{--            clickedBtn.disabled = true;--}}
    {{--            clickedBtn.style.color = 'white';--}}
    {{--            clickedBtn.style.background = 'gray';--}}
    {{--        }--}}

    {{--        $(document).on('click', '.imageModal', function () {--}}
    {{--            var id = $(this).attr('data-id');--}}

    {{--            $.ajax({--}}
    {{--                url: '{{route("seller.image-url")}}',--}}
    {{--                type: 'GET',--}}
    {{--                data: {--}}
    {{--                    "id": id,--}}
    {{--                    "_token": "{{ csrf_token() }}",--}}
    {{--                },--}}
    {{--                dataType: 'json',--}}
    {{--                success: function (response) {--}}
    {{--                    // console.log(response)--}}

    {{--                    $('#image_url').html('http://127.0.0.1:8000' + response.path);--}}

    {{--                    $("#image-add-url").attr("src", response.path);--}}

    {{--                    $("#imageModal").modal("show");--}}
    {{--                },--}}
    {{--                error: function (response) {--}}
    {{--                    console.log({message: response.message, isError: true})--}}
    {{--                }--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
    {{--    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>--}}
    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('#bulk-image-gallery').validate({--}}
    {{--                rules: {--}}
    {{--                    photos: {--}}
    {{--                        required: true,--}}
    {{--                    },--}}
    {{--                },--}}
    {{--                messages: {--}}
    {{--                    photos: {--}}
    {{--                        required: "Please select images.....",--}}
    {{--                    },--}}
    {{--                },--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
