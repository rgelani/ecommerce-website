@if(!empty($sliderImages) && count($sliderImages) > 0)
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
@else
<h1>No Banners are avaliable!</h1>
@endif
