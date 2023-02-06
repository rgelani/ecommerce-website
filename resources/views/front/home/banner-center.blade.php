<section class="crazy-deals-section">
        <div class="container">
            <div class="crazy-deals-row">
                    @foreach($bannerImages['center'] as $bImage)
                    <div class="crazy-deals-col">
                    <div class="crazy-deals-inner">
                        <div class="crazy-deals-content"
                            style="background-image: url({{ $bImage->image_url }});">
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
                    @endforeach
            </div>
        </div>
    </section>