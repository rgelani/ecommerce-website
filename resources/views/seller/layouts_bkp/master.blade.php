@include('seller.layouts.head')

<body class="product_view_page">
   <div class="main_wrapper dashboard_wrap">
      @include('seller.layouts.side-bar')
      <!-- Main Content Start -->
      <div class="main_content">
         <div class="main_content_lg">
            <!-- <div class="common_content_pad_block"> -->
            @include('seller.layouts.header')
            @yield('content')
         </div>
      </div>

      <div class="modal fade common_modal" id="product_modal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content terimin_content">
               <div class="modal-body">
                  <div class="close_btn" data-bs-dismiss="modal">
                     <i class="fa fa-times" aria-hidden="true"></i>
                  </div>
                  <div class="common_product_content">
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="product_img_wrap">
                              <img src="{{ asset('seller-assets/image/product_view/product_big_img.png') }}" alt="product">
                           </div>
                           <div class="product_small_img_wrap">
                              <div class="row">
                                 <div class="col-3">
                                    <div class="product_small">
                                       <img src="{{ asset('seller-assets/image/product_view/product_small_img_1.png') }}" alt="small product">
                                    </div>
                                 </div>
                                 <div class="col-3">
                                    <div class="product_small">
                                       <img src="{{ asset('seller-assets/image/product_view/product_small_img_2.png') }}" alt="small product">
                                    </div>
                                 </div>
                                 <div class="col-3">
                                    <div class="product_small">
                                       <img src="{{ asset('seller-assets/image/product_view/product_small_img_1.png') }}" alt="small product">
                                    </div>
                                 </div>
                                 <div class="col-3">
                                    <div class="product_small">
                                       <img src="{{ asset('seller-assets/image/product_view/product_small_img_2.png') }}" alt="small product">
                                    </div>
                                 </div>
                                 <div class="col-3">
                                    <div class="product_small">
                                       <img src="{{ asset('seller-assets/image/product_view/product_small_img_1.png') }}" alt="small product">
                                    </div>
                                 </div>
                                 <div class="col-3">
                                    <div class="product_small">
                                       <img src="{{ asset('seller-assets/image/product_view/product_small_img_2.png') }}" alt="small product">
                                    </div>
                                 </div>
                                 <div class="col-3">
                                    <div class="product_small">
                                       <img src="{{ asset('seller-assets/image/product_view/product_small_img_1.png') }}" alt="small product">
                                    </div>
                                 </div>
                                 <div class="col-3">
                                    <div class="product_small">
                                       <img src="{{ asset('seller-assets/image/product_view/product_small_img_2.png') }}" alt="small product">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="product_right_info">
                              <h3>The Atelier Tailored Coat</h3>
                              <div class="rate_wrap">
                                 <div class="start_wrap">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                 </div>
                                 <span>4.5 / 1320 reviews</span>
                              </div>
                           </div>

                           <div class="product_details">
                              <div class="product_name">
                                 <p>Price:</p>
                                 <span>₹499.00</span>
                              </div>
                              <div class="product_name">
                                 <p>SKU Code :</p>
                                 <span>#4657</span>
                              </div>
                              <div class="product_name">
                                 <p>Tags :</p>
                                 <span>Fashion, Hood, Classic</span>
                              </div>
                              <div class="product_name">
                                 <p>Available Stock :</p>
                                 <span>500</span>
                              </div>
                           </div>

                           <div class="product_dec">
                              <p>Sleek, polished, and boasting an impeccably modern fit, this blue, 2-but-
                                 ton Lazio suit features a notch lapel, flap pockets, and accompanying flat
                                 front trousers—all in pure wool by Vitale Barberis Canonico.

                                 • Dark blue suit for a tone-on-tone look
                                 • Regular fit
                                 • 100% Cotton
                                 • Free shipping with 4 days delivery
                              </p>
                           </div>

                           <div class="color_varient">
                              <h3>Varient:</h3>
                              <div class="var_wrap">
                                 <div class="color_wrap">
                                    <p>Color</p>
                                    <ul>
                                       <li class="bg_black"></li>
                                       <li class="bg_yellow"></li>
                                       <li class="bg_orange"></li>
                                       <li class="bg_green"></li>
                                    </ul>
                                 </div>
                                 <div class="size_wrap">
                                    <p>Size</p>
                                    <ul>
                                       <li class="size_fild">S</li>
                                       <li class="size_fild">M</li>
                                       <li class="size_fild">L</li>
                                       <li class="size_fild">XL</li>
                                       <li class="size_fild">XXL</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>

                           <div class="size">

                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="product_bottom_shape">
                  <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint0_radial_700_3904)" />
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint1_linear_700_3904)" fill-opacity="0.47" />
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" />
                     <defs>
                        <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                           <stop stop-color="#A2CDC5" />
                           <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                        </radialGradient>
                        <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734" y2="-4.51455" gradientUnits="userSpaceOnUse">
                           <stop stop-color="#A2CDC5" />
                           <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                        </linearGradient>
                     </defs>
                  </svg>
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="close_profile_img">
                     <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="profile_model_info">
                     <div>
                        <div class="profile_img_round_main">
                           <img src="{{asset('seller-assets/image/image_bluk/profile_pic_model.png')}}" class="profile_img_round" alt="">
                        </div>
                        <div class="text-center my-3">
                           <h4 class="text-dark">DoNotDisturb</h4>
                           <p class="text-dark py-2">Lorem ipsum dolor sit amet.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-body modal-body-cancel text-center">
                  <a class="logout" href="{{route('seller.logout')}}">Logout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   @include('seller.layouts.scripts')
   @yield('extra-script')
</body>