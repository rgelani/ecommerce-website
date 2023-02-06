@if(!empty($categories->data) && count($categories->data) > 0)
<div class="main-category">
    <div class="container-fluid ">
        <div class="school-options-dropdown categories">
            @foreach($categories->data['categories'] as $index => $category)
            <div class="category ">
                {{-- <a  href="{{ route('problems.edit', $problem->id) }}"> --}}
                <div class="category-image"><a href="#"><img src="{{ $category['image_url'] }}" class=""></a>
                </div>
                <div class="dropdown">
                    <a id="dLabel"
                        class="category-name catname @if(count($category['child']) > 0) dropdown-toggle wdcategory @endif"
                        @if(count($category['child']) > 0) data-toggle="dropdown" @else href="{{ route('mens-top-wear', ['category_id' => $category['id']]) }}" @endif>

                        {{-- data-toggle="dropdown" data-target="{{App\Http\Traits\slug::create_slug_static($category['name'])}}" href="{{App\Http\Traits\slug::create_slug_static($category['name'])}}"> --}}

                        {{ $category['name'] }}
                        @if(!empty($category['child']) && count($category['child']) > 0)
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.8423 0.167368C14.0526 0.390524 14.0526 0.752333 13.8423 0.97549L7.38075 7.83263C7.17047 8.05579 6.82953 8.05579 6.61925 7.83263L0.157711 0.97549C-0.0525703 0.752333 -0.0525703 0.390524 0.157711 0.167368C0.367994 -0.055789 0.708928 -0.055789 0.919211 0.167368L7 6.62045L13.0808 0.167368C13.2911 -0.0557892 13.632 -0.0557892 13.8423 0.167368Z"
                                fill="black" />
                        </svg>
                        @endif
                    </a>
                    @if(!empty($category['child']) && count($category['child']) > 0)
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        @foreach($category['child'] as $child)
                        <li class="dropdown-submenu">
                            <div class="cat justify-content-between align-items-center">
                                <div class="col-sm-12">
                                    <a tabindex="-1" class="category_items" @if($child['sub_category'] == null && count($child['sub_category']) == 0) href="{{ route('mens-top-wear', ['category_id' => $category['id'], 'sub_category_id' => $child['id']]) }}" @endif>{{ $child['name'] }}</a>

                                    {{-- <a tabindex="-1" href="products\{{ App\Http\Traits\slug::create_slug_static($child['name'])}}" class="category_items">{{ $child['name'] }}</a> --}}

                                </div>
                                @if($child['sub_category'] != null && count($child['sub_category']) > 0)
                                <div class=""><img src="{{asset('user/user-assets/images/category-arrow.png') }}"
                                        alt="{{ $child['name'] }}">
                                </div>
                                @endif
                            </div>
                            @if($child['sub_category'] != null && count($child['sub_category']) > 0)
                            <ul class="dropdown-menu">
                                @foreach($child['sub_category'] as $subCat)
                                <li class="sub-cat"><a tabindex="-1" href="{{ route('mens-top-wear', ['category_id' => $category['id'], 'sub_category_id' => $subCat['id']]) }}"

                                {{-- <li class="sub-cat"><a tabindex="-1" href="product\{{App\Http\Traits\slug::create_slug_static($subCat['name'])}}" --}}

                                        class="category_items sub-cat-heading">{{ $subCat['name'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@else
<h1>No categories are avaliable!</h1>
@endif