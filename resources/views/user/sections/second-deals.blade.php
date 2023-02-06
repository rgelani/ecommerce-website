@if(isset($products->id))
    <section class="crazy-deals-section second-deals-section">
        <div class="container">
            <div class="crazy-deals-row">
                <a href="{{ route('product_view', ['id' => $products->id]) }}" class="crazy-deals-col">
                    <div class="crazy-deals-inner">
                        <div class="crazy-deals-content">
                            <img src="/storage/product/{{explode(',', $products->productImage?->src)[0]}}" alt="product image">
                        </div>
                    </div>
                </a>
                <div class="crazy-deals-col">
                    <div class="crazy-deals-inner">
                        <div class="crazy-deals-content">
                            <img src="{{asset('user/user-assets/images/realme-c21y-2.png') }}">
                        </div>
                    </div>
                </div>
                <div class="crazy-deals-col">
                    <div class="crazy-deals-inner">
                        <div class="crazy-deals-content">
                            <img src="{{asset('user/user-assets/images/realme-c21y-1.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif