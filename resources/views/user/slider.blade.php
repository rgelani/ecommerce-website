<section class="main-banner-section">
        <div class="main-banner-row">
            @foreach($sliderImages as $image)
            <div class="main-banner-col">
                <div class="main-banner-inner">
                    <img src="{{ $image->image_url }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
</section>