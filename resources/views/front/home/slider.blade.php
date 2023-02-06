<section class="main-banner-section">
        <div class="main-banner-row">
            @foreach($sliderImages as $sliderImage)
            <div class="main-banner-col">
                <div class="main-banner-inner">
                    <img src="{{ $sliderImage->image_url }}" alt="">
                </div>
            </div>
            @endforeach

        </div>
    </section>