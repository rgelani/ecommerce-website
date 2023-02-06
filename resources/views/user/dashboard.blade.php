@extends('user.layouts.master')
@section('content')
@include('user.categories', $categories)
@include('front.auth.login')
@include('user.slider', $sliderImages)

<section class="crazy-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-1.png') }}) ">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-2.png') }})">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-1.png') }})">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.offers.deals-of-the-day')

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.offers.deals-of-the-day')

<section class="crazy-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-1.png') }})">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-2.png') }})">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-1.png') }})">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="migh-interested-section today-deals-section">
    <div class="migh-interested-container">
        <div class="migh-interested-title">
            <h2>Deals for Men’s Fashion</h2>
        </div>
        <div class="migh-interested-slider first-interested-slider">
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/slider(1).png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/slider(2).png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/slider(3).png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/slider(4).png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/slider(5).png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/slider(3).png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="migh-interested-section today-deals-section">
    <div class="migh-interested-container">
        <div class="migh-interested-title">
            <h2>Deals for Women’s Fashion</h2>
        </div>
        <div class="migh-interested-slider first-interested-slider">
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/musical-amplifiers-1.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/musical-amplifiers-2.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/musical-amplifiers-3.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/musical-amplifiers-4.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/musical-amplifiers-5.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/musical-amplifiers-3.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="crazy-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-1.png') }})">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-2.png') }})">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content"
                        style="background-image: url({{ asset('user-assets/images/crazy-deals-section-1.png') }})">
                        <h2>CRAZY <span>DEALS</span> </h2>
                        <h5>New Deals at</h5>
                        <h3>Daily 12pm</h3>
                        <a href="#">
                            <span>Shop Now</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11"
                                    fill="none">
                                    <path
                                        d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.offers.top-offers')

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="migh-interested-section today-deals-section">
    <div class="migh-interested-container">
        <div class="migh-interested-title">
            <h2>Top Deals on Fashion</h2>
        </div>
        <div class="migh-interested-slider first-interested-slider">
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-1.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-2.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-3.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-4.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-5.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-3.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-brands-section">
    <div class="container">
        <div class="featured-brands-title">
            <h2>Featured Brands</h2>
        </div>
    </div>
    <div class="featured-brands-row">
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-1.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-2.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-3.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-4.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-2.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="migh-interested-section today-deals-section">
    <div class="migh-interested-container">
        <div class="migh-interested-title">
            <h2>Top Deals on Electronics</h2>
        </div>
        <div class="migh-interested-slider first-interested-slider">
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-1.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-2.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-3.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-4.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-5.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-3.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="under-price-section">
    <div class="under-price-row">
        <div class="under-price-section-col">
            <div class="under-price-inner">
                <h3> UNDER </h3>
                <h2>
                    <span class="under-price-rup">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="37" viewBox="0 0 16 37" fill="none">
                            <path
                                d="M15.389 3.86055V-0.00012207H0V3.91696H1.21919C4.71642 3.91696 6.89352 5.02778 7.54068 7.82992L0 7.8296V11.6906H7.55359C6.92443 14.5391 4.74289 15.6676 1.21919 15.6676H0V19.5843H3.83074L9.09345 36.5581H14.2761L8.40038 18.2787C10.969 17.3473 12.447 14.9926 12.847 11.6903H15.3898V7.82928H12.8385C12.633 6.23592 12.1655 4.92272 11.4532 3.8608L15.3891 3.86112L15.389 3.86055Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <span>199</span>
                </h2>
            </div>
        </div>
        <div class="under-price-section-col">
            <div class="under-price-inner">
                <h3> UNDER </h3>
                <h2>
                    <span class="under-price-rup">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="37" viewBox="0 0 16 37" fill="none">
                            <path
                                d="M15.389 3.86055V-0.00012207H0V3.91696H1.21919C4.71642 3.91696 6.89352 5.02778 7.54068 7.82992L0 7.8296V11.6906H7.55359C6.92443 14.5391 4.74289 15.6676 1.21919 15.6676H0V19.5843H3.83074L9.09345 36.5581H14.2761L8.40038 18.2787C10.969 17.3473 12.447 14.9926 12.847 11.6903H15.3898V7.82928H12.8385C12.633 6.23592 12.1655 4.92272 11.4532 3.8608L15.3891 3.86112L15.389 3.86055Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <span>299</span>
                </h2>
            </div>
        </div>
        <div class="under-price-section-col">
            <div class="under-price-inner">
                <h3> UNDER </h3>
                <h2>
                    <span class="under-price-rup">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="37" viewBox="0 0 16 37" fill="none">
                            <path
                                d="M15.389 3.86055V-0.00012207H0V3.91696H1.21919C4.71642 3.91696 6.89352 5.02778 7.54068 7.82992L0 7.8296V11.6906H7.55359C6.92443 14.5391 4.74289 15.6676 1.21919 15.6676H0V19.5843H3.83074L9.09345 36.5581H14.2761L8.40038 18.2787C10.969 17.3473 12.447 14.9926 12.847 11.6903H15.3898V7.82928H12.8385C12.633 6.23592 12.1655 4.92272 11.4532 3.8608L15.3891 3.86112L15.389 3.86055Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <span>499</span>
                </h2>
            </div>
        </div>
        <div class="under-price-section-col">
            <div class="under-price-inner">
                <h3> UNDER </h3>
                <h2>
                    <span class="under-price-rup">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="37" viewBox="0 0 16 37" fill="none">
                            <path
                                d="M15.389 3.86055V-0.00012207H0V3.91696H1.21919C4.71642 3.91696 6.89352 5.02778 7.54068 7.82992L0 7.8296V11.6906H7.55359C6.92443 14.5391 4.74289 15.6676 1.21919 15.6676H0V19.5843H3.83074L9.09345 36.5581H14.2761L8.40038 18.2787C10.969 17.3473 12.447 14.9926 12.847 11.6903H15.3898V7.82928H12.8385C12.633 6.23592 12.1655 4.92272 11.4532 3.8608L15.3891 3.86112L15.389 3.86055Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <span>699</span>
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="migh-interested-section today-deals-section">
    <div class="migh-interested-container">
        <div class="migh-interested-title">
            <h2>Best Fashion Brand For You!</h2>
        </div>
        <div class="migh-interested-slider first-interested-slider">
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-1.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-2.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-3.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-4.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-5.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
            <div class="migh-interested-col">
                <div class="migh-interested-inner">
                    <div class="migh-interested-image">
                        <img src="{{ asset('user-assets/images/pngegg-3.png') }}" alt="">
                    </div>
                    <div class="migh-interested-content">
                        <h2>Musical Amplifiers</h2>
                        <h4>Upto 50% off</h4>
                        <h6>By Mixars</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-brands-section">
    <div class="container">
        <div class="featured-brands-title">
            <h2>Featured Brands</h2>
        </div>
    </div>
    <div class="featured-brands-row">
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-1.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-2.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-3.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-4.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="featured-brands-col">
            <div class="featured-brands-image">
                <img src="{{ asset('user-assets/images/featured-brands-2.png') }}" alt="">
            </div>
            <div class="featured-brands-inner">
                <a href="#">
                    <span>70% OFF</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path
                                d="M0.633279 9.10388L4.43075 5.34258L0.633279 1.58127L1.39277 0.0767527L6.70923 5.34258L1.39277 10.6084L0.633279 9.10388Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="under-price-section no-cost-emi">
    <div class="under-price-row">
        <div class="under-price-section-col">
            <div class="under-price-inner">
                <h2>No Cost <span>EMI</span> </h2>
                <p>On Leading Bank Credit & Debit Cards</p>
                <a href="#">Know More</a>
            </div>
        </div>
        <div class="under-price-section-col">
            <div class="under-price-inner">
                <h2>No Cost <span>EMI</span> </h2>
                <p>On Leading Bank Credit & Debit Cards</p>
                <a href="#">Know More</a>
            </div>
        </div>
        <div class="under-price-section-col">
            <div class="under-price-inner">
                <h2>No Cost <span>EMI</span> </h2>
                <p>On Leading Bank Credit & Debit Cards</p>
                <a href="#">Know More</a>
            </div>
        </div>
        <div class="under-price-section-col">
            <div class="under-price-inner">
                <h2>No Cost <span>EMI</span> </h2>
                <p>On Leading Bank Credit & Debit Cards</p>
                <a href="#">Know More</a>
            </div>
        </div>
    </div>
</section>

<section class="crazy-deals-section second-deals-section">
    <div class="container">
        <div class="crazy-deals-row">
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-2.png') }}">
                    </div>
                </div>
            </div>
            <div class="crazy-deals-col">
                <div class="crazy-deals-inner">
                    <div class="crazy-deals-content">
                        <img src="{{ asset('user-assets/images/realme-c21y-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.order.shipping')
@endsection
@push('extra-js')
@endpush